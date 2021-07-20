<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('formularios', [HomeController::class, 'formulario']);

Route::get('papeles', [HomeController::class, 'documentos']);

Route::get('comprobante', [HomeController::class, 'comprobante']);

Route::post('subirsoportes', [HomeController::class, 'subirSoportes']);

Route::post('subirformularios', [HomeController::class, 'subirFormularios']);

Route::post('subircomprobante', [HomeController::class, 'subirComprobante']);

Route::get('admin/home', [AdminController::class, 'home']);

Route::get('admin/ver-usuarios/{id}', [AdminController::class, 'show']);
