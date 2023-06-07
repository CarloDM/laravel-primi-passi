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

Route::get('/', function () {
    return view('index',['message' => 'laravel primi passi']) ;
})->name('index');

Route::get('/home', function(){
    return view('home', ['saluto' => 'benvenuto'] ) ;
})->name('home');

//  passare l array con compact
Route::get('/chisiamo', function(){
    $arrayProva = [
        'name' => 'Carlo',
        'surname' => 'De Mauro',
        'email' => 'carlo@hotmail.it'
    ];
    return view('chisiamo', compact('arrayProva')) ;
})->name('about');
