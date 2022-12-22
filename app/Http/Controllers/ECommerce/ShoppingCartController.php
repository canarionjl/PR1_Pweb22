<?php

namespace App\Http\Controllers\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function index()
    {
        $currentCart = [];
        $newCart = [];
        if (session()->has('shoppingCart'))
            $currentCart = session()->get('shoppingCart');
        foreach ($currentCart as $product) {
            $new_product = ProductoUsuario::find($product[0]);
            $quantity = $product[1];
            $newCart[] = [$new_product, $quantity];
        }

        return view('webViews/e-commerce/shopping_cart')->with("product_cart", $newCart);
    }

    public function processToPayPal(Request $request)
    {
        $currentCart = [];
        if (session()->has('shoppingCart')) {
            $currentCart = session()->get('shoppingCart');
        }
        foreach ($currentCart as $product) {
            $max_quantity = ProductoUsuario::find($product[0]) -> cantidad;
            $rule = 'max:'.$max_quantity;
            $request->validate([
                'quantity_' . $product[0] => ['required', 'numeric', 'integer', $rule]
            ]);
        }
        return redirect(route('paypal'));
    }

    public function deleteProductFromCart($id){
        $currentCart = session()->get('shoppingCart');
        unset($currentCart[$id]);
        $currentCart = array_values($currentCart);
        session()->put('shoppingCart', $currentCart);
        return redirect(route('shoppingCart'));
    }
}
