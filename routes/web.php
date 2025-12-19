<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return "template.default";
});

Route::get('/mycontroller', [App\Http\controllers\MyController::class, 'index']);
