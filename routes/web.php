<?php

use App\Http\Livewire\Counter;
use App\Http\Livewire\Todo;
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
    return view('dashboard');
});

Route::get('counter', Counter::class);

Route::get('todos', Todo::class);

Route::get('search-users', function() {
    return view('search-users');
});
