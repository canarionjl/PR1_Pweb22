<?php

namespace App\Http\Controllers\ECommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;

class ShoppingCartController extends Controller
{

    public function index(){
        $products = ProductoUsuario::get();
        return view('themes/temaGrupo3/shopping_cart') -> with ('products_cart',$products);
    }
}
