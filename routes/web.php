<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Sensors\SensorController;
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
    return view ('themes/temaGrupo3/paginaPersonal_grupo3',compact('name_of_user'));
});

Route::get('productos/{product_type}', function($product_type) {
    return view ('themes/temaGrupo3/product_detail',compact('product_type'));
});

Route::get('productos/{product_type}', function($product_type) {
    return view ('themes/temaGrupo3/product_detail',compact('product_type'));
});

Route::get('login', [LoginController::class,'index'])->name('login');

Route::post('login',[LoginController::class,'store'])->name('SensorController.store');

Route::get('register', [RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store']);

Route::get('/',function(){
   return view('themes/temaGrupo3/templates/home');
});

Route::get('practica3/{type}', function($type){
    switch ($type){
        case 'basico'||'sensores'||'graficos':
            return view("themes/temaGrupo3/practica3_$type");
        default:
            return response(view('themes/temaGrupo3/errors/404'), 404);
    }
});

Route::get('/portal', function(){
    return view('themes/temaGrupo3/portal');
})->middleware('auth');
Route::get('/portal/gestor', function(){
    return view('themes/temaGrupo3/portal_gestor');
});
