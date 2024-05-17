<?php

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
    return view('home');
});
Route::get('/user', function () {
    $user = [
        'name'=> 'Davide', 'surname' => 'Alovisio',
        'email'=> 'D7qQV@example.com',
        'img'=> '/images/DSC_0070-removebg-preview.png',
        'password'=> '123456',
        ];
    return view('user', $user);
});
