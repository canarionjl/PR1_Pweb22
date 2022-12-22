<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id)
    {
        $product = ProductoUsuario::find($id);

        if ($product === null) {
            return redirect('/');
        }

        return view('webViews/products/product_detail')->with('product', $product);
    }

    public function addProductToCart(Request $request)
    {
        $request->validate([
            'quantity' => ['required', 'numeric', 'integer'],
            'unidad' => ['required']
        ]);

        $quantity = intval($request->quantity);
        $id = intval($request->product_id);

        $new_product = array($id,$quantity);
        $exists = false;

        if (session()->has('shoppingCart')) {
            $currentCart = session()->get('shoppingCart');
            for ($count=0; $count<count($currentCart); $count=$count +1 ) {
                if ($currentCart[$count][0] === $new_product[0]) {
                    $currentCart[$count][1] += $new_product[1];
                    $exists = true;
                }
            }
        }
        else {
            $currentCart = [];
        }

        if (!$exists) {
            $currentCart[] = $new_product;
        }

        session()->put('shoppingCart', $currentCart);
        return redirect('/products');
    }
}
