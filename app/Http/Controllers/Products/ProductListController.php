<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\ProductoUsuario;
use Illuminate\Support\Facades\Auth;

class ProductListController extends Controller
{
    public function index()
    {
        $searched_user = 'Vendedor';
        $tipoUsuario = 'Cliente';

        if (!Auth::guest()) {
            $tipoUsuario = Auth::user()->tipoUsuario;
            if (strcmp($tipoUsuario, 'Productor') === 0) {
                return redirect('/');
            }
        }

        if (strcmp($tipoUsuario, 'Vendedor') === 0) {
            $searched_user = 'Productor';
        }

        $product_list = ProductoUsuario::join('usuarios', 'usuarios.id', '=', 'productos_usuarios.usuario_id')
            -> where('usuarios.tipoUsuario', 'like', $searched_user)->select('*','productos_usuarios.id as original_id') -> get();

        return view('webViews/products/product_list')->with('product_list', $product_list);
    }
}
