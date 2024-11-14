<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documentos', function () {
    return view('documentos');
});

Route::get('/documentos2', function () {
    return view('documentos2');
});

Route::get('/documentos3', function () {
    return view('documentos3');
});

Route::get('/documentos4', function () {
    return view('documentos4');
});
