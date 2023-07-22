<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::post('/teste', function (Request $request) {
    $data = $request->all();
    $formData = $data['form'];

    return $formData;
})->name('teste');

Route::resource('clients', App\Http\Controllers\ClientController::class);
