<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepositoryController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('repository',App\Http\Controllers\RepositoryController::class)->middleware('auth');

Route::get('login/github',[\App\Http\Controllers\LoginSocialController::class,'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [\App\Http\Controllers\LoginSocialController::class,'handleToGithubCallback'])->name('login.github.callback');
Route::get('delete/user/{id}','RepositoryController@destroy');
require __DIR__.'/auth.php';
//49minutos