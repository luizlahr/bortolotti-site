<?php

use App\Mail\ContactMail;

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
    return view('home');
})->name("home");

Route::get('/mail', function () {

    $data = [
        "name" => "Luiz Lahr",
        "email" => "boivl@hotmail.com",
        "subject" => "Teste de E-mail",
        "message" => "Vamos ver o que vem!"
    ];

    return new ContactMail($data);
});
