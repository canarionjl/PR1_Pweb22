<?php



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
    include("../Practicas/JoseLuisPrivado.html");
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

Route::get('/login', function() {
    return view ('themes/temaGrupo3/login');
});

Route::get('/register', function() {
    return view ('themes/temaGrupo3/register');
});

Route::get('paginaPersonal/{name_of_user?}', function($name_of_user = "Unknown") {
    return view ('themes/temaGrupo3/paginaPersonal_grupo3',compact('name_of_user'));
});

Route::get('productos/{product_type}', function($product_type) {
    return view ('themes/temaGrupo3/product_detail',compact('product_type'));
});

