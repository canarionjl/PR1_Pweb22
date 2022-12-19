<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index ($id) {
        $product = ProductoUsuario::find($id);

        if ($product === null){
            return redirect('/');
        }

        return view('themes/temaGrupo3/product_detail')->with('product', $product);
    }
}
