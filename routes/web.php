<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return "template.default";
});

Route::get('/mycontroller', [App\Http\controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\controllers\MyController::class, 'calculate']);

Route::resource('/flights', [App\Http\controllers\MyController::class, 'class']);
