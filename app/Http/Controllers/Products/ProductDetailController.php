<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;

class ProductDetailController extends Controller
{
    public function index ($id) {
        $product = ProductoUsuario::find($id);

        if ($product === null){
            return redirect('/');
        }

        return view('webViews/products/product_list')->with('product', $product);
    }
}
