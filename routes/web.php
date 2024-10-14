<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokedexController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', PokedexController::class)->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('pokemon', PokemonController::class);
    });
