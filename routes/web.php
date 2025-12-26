<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return "template.default";
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/submitForm', [App\Http\Controllers\MyController::class, 'submitForm']);

//Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
//Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);

//Route::resource('/flights', [App\Http\Controllers\MyController::class, 'class']);
