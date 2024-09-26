<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/regi', function () {
    return view('register');
});



Route::post('/addform', [MyController::class, 'create']);
