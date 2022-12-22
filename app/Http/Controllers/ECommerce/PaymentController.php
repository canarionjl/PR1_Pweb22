<?php

namespace App\Http\Controllers\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct(){
         $paypalConfig = Config::get('paypal');

         $this->apiContext = new ApiContext(
             new OAuthTokenCredential(
                 $paypalConfig['client_id'],
                 $paypalConfig['secret']
             )
         );
        $this->apiContext->setConfig($paypalConfig['settings']);
    }
    public function payWithPayPal(){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $allItems = [];
        $items = [];
        $items[0]=[1,2];
        $items[1]=[2,4];
        $total = 0;
        foreach($items as $addon){
            $product = ProductoUsuario::find($addon[0]);
            $ppItem = new Item();
            $ppItem->setName($product->usuario_id)
                ->setDescription($product->product_id)
                ->setQuantity($addon[1])
                ->setCurrency('EUR')
                ->setPrice($product->precio);
            $allItems[] = $ppItem;
            $total += $product->precio * $addon[1];
        }
        $itemList = new ItemList();
        $itemList->setItems($allItems);


        $amount = new Amount();
        $amount->setTotal($total );
        $amount->setCurrency('EUR');

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList);
        $transaction->setDescription('Compra por 1 papa');

        $callbackUrl = url('paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);

            return redirect()->away($payment->getApprovalLink());
        }
        catch (PayPalConnectionException $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            return  $ex->getData();
        }
    }

    public function payPalStatus(Request $request){
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token){
            $status = 'No se pudo proceder con el pago a través de Paypal.';
            return redirect('resultsPay')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);
        dd($result);
        if($result->getState() === 'approved') {
            $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente.';
            return redirect('resultsPay')->with(compact('status'));
        }

        $status = 'No se pudo proceder con el pago a través de Paypal.';
        return redirect('resultsPay')->with(compact('status'));
    }
}
