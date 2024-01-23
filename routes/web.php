<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;




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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegistroController::class, 'create'])->name('register.create');
Route::post('/register', [RegistroController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemon/favoritos', [PokemonController::class, 'favoritos'])->name('pokemon.favoritos');
Route::post('/pokemon/add-to-favoritos/{pokemonId}', [PokemonController::class, 'AddToFavoritos'])->name('pokemon.addToFavoritos');
Route::post('/pokemon/remove-from-favoritos/{pokemonId}', [PokemonController::class, 'removeFromFavoritos'])->name('pokemon.removeFromFavoritos');
