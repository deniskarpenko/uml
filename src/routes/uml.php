<?php

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

Route::get('/uml', function () {
    return view('uml::index');
});
Route::get('/uml/dashboard', [\Deniskarpenko\Uml\Http\Controllers\UmlController::class, 'uml_diagram']);

