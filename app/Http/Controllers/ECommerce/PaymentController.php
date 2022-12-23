<?php

namespace App\Http\Controllers\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\ProductoPedido;
use App\Models\ProductoUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $products = session()->get('shoppingCart');

        foreach($products as $addon){
            $product = ProductoUsuario::find($addon[0]);
            $ppItem = new Item();
            $ppItem->setName($addon[0])
                ->setQuantity($addon[1])
                ->setCurrency('EUR')
                ->setPrice($product->precio);
            $allItems[] = $ppItem;
        }
        $itemList = new ItemList();
        $itemList->setItems($allItems);



        $amount = new Amount();
        $amount->setTotal($itemList->getTotalPrice());
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
        if($result->getState() === 'approved') {

            /** Añadimos un nuevo pedido a la BD **/
            // TODO: Comprobar que no exista el pedido ya (Eloquent method).
            try {

                $pedido_id = Pedido::create([
                    'comprador_id' => Auth::user()->id,
                    'fecha' => date('Y-m-d H:i:s'),
                    'importe' => $result->transactions[0]->getAmount()->total,
                    'paymentId' => $paymentId,
                    'token' => $token,
                    'payerId' => $payerId,
                ])->id;
                /** Añadir en la base de datos (Producto_Pedido y pedido) y reducir cantidad **/
                foreach ($result->transactions[0]->item_list->items as $item) {
                    ProductoPedido::create([
                        'productoUsuario_id' => $item->name,
                        'pedido_id' => $pedido_id,
                        'cantidad' => $item->quantity,
                        'precio' => $item->price,
                    ]);
                    $productoUsuario = ProductoUsuario::find($item->name);
                    $productoUsuario->update([
                        'cantidad' => ($productoUsuario->cantidad - $item->quantity)
                    ]);
                }
                $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente.';
                return redirect('resultsPay')->with(compact('status'));
                }catch(Exception $ex){
                switch(substr($ex,23,5)){
                    case('23000'):
                        $status = 'No se pudo proceder con el pago a través de Paypal,
                         el pedido ya fue efectuado anteriormente.';
                        break;
                    default:
                        $status = 'No se pudo proceder con el pago a través de Paypal.';
                }
                return redirect('resultsPay')->with(compact('status'));
                }

        }
        $status = 'No se pudo proceder con el pago a través de Paypal.';
        return redirect('resultsPay')->with(compact('status'));
    }
}
