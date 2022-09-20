<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\ProductosController;
use App\Http\Controllers\dashboard\ProveedoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::resource('productos', ProductosController::class);
route::resource('proveedor', ProveedoresController::class);