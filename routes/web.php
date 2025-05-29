<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fp-admin', function () {
    return view('fpadmin', [
        "title" => "Funnel Pages"
    ]);
});
