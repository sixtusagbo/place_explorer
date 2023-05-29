<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
});

Route::post('/find', function (Request $request) {
    $values = $request->validate([
        'address'   => 'required'
    ]);

    $data = [
        'place' => $values['address']
    ];

    return view('place')->with($data);
})->name('search');
