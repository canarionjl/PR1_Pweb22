<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ECommerce\PaymentController;
use App\Http\Controllers\ECommerce\ShoppingCartController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Products\ProductDetailController;
use App\Http\Controllers\Products\ProductListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/JoseLuis', function() {
    return redirect ('JoseLuisPublico.html');
});

Route::get('/JoseLuisPrivado', function() {
    include("../Practicas/JoseLuisPrivado");
});

Route::get('/Himar', function() {
    include('HimarPublico.html');
});

Route::get('/HimarPrivado', function() {
    include("../Practicas/HimarPrivado.html");
});

Route::get('/Alvaro', function() {
    include('AlvaroPublico.html');
});

Route::get('/AlvaroPrivado', function() {
    include("../Practicas/AlvaroPrivado.html");
});

Route::get('paginaPersonal/{name_of_user?}', function($name_of_user = "Unknown") {
    return view ('webViews/developerTeam/paginaPersonal_grupo3',compact('name_of_user'));
});

Route::get('products', [ProductListController::class,'index']);
Route::get('product/{id}', [ProductDetailController::class,'index']);

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store'])->name('LoginController.store');

Route::get('register', [RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store']);

Route::get('logout', function(){
        Auth::logout();
        return redirect(route('home'));
});


Route:: get('shoppingCart',[ShoppingCartController::class,'index']);

Route::get('/',function(){
   return view('themes/temaGrupo3/templates/home');
})->name('home');

Route::get('practica3/{type}', function($type){
    if ($type==='basico' || $type==='sensores' || $type==='graficos') {

    return view("webViews/sensors/practica3_$type");
    }
        else {
    return response(view('themes/temaGrupo3/errors/404'), 404);
        }
});

Route::get('/portal', function(){
    if(Auth::user()->tipoUsuario === 'Productor'){
        return view('webViews/portal/portal');
    }else{
        return redirect('portal/gestor');
    }

})-> middleware('tipoAuth:null,vendedor,productor');

Route::resource('portal/gestor',ProductController::class)->middleware('tipoAuth:null,vendedor,productor');

// Payment
Route::get('paypal/pay', [PaymentController::class, 'payWithPayPal']);
Route::get('paypal/status', [PaymentController::class, 'payPalStatus']);

Route::get('resultsPay', function(){
    return view('webViews.e-commerce.results');
});
