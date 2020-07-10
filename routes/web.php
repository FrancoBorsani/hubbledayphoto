<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@inicio');



Route::post('/imagenFondo', 'PageController@imagenFondo')->name('imagenFondo');

Route::get('/imagenFondoMostrar',"PageController@imagenFondoMostrar")->name('imagenFondoMostrar');
