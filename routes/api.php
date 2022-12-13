<?php

use App\Http\Controllers\Sensors\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('get/date/{startDate}/{endDate}/{id}', [SensorController::class,'index'])->name('SensorController.index');
Route::get('get/date/{startDate}/{endDate}', [SensorController::class,'index'])->name('SensorController.index');
Route::post('add',[SensorController::class,'store'])->name('SensorController.store');

Route::get('get/sensors',[SensorController::class,'getSensors'])->name('SensorController.getSensors');
Route::get('get/sensorData/{sensor_id}',[SensorController::class,'getSensorData'])->name('SensorController.getSensorData');
