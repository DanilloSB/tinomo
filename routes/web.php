<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    return view('site.home');
})->name('site.home');

Route::get('/usuarios_insere_e_lista', function () {
    $umUser = new User;
    $umUser ->name = 'Danillo';
    $timestamp = date("Y-m-d-h-i-sa");
    $umUser->email = 'asdf@.com'.$timestamp;
    $umUser->password = '123';
    $umUser->save();
    return User::all();
});
