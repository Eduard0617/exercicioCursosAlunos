<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('cursos.index');
})->name('cursos.index');


Route::get('/create', function () {
    return view('cursos.create');
})->name('cursos.create');