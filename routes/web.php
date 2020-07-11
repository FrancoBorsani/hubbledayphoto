<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PageController@inicio');
Route::post('/imagenfondo', 'PageController@imagenfondo')->name('imagenfondo');

Route::get('imagenFondoMostrar',"PageController@imagenFondoMostrar")->name('imagenFondoMostrar');

//Route::get('imagenFondo',"PageController@imagenFondoMostrar")->name('imagenFondoMostrar');


//Route::get('/', 'PageController@inicio');



//Route::post('/imagenfondo', 'PageController@imagenfondo');

//Route::get('/imagenFondoMostrar',"PageController@imagenfondomostrar")->name('imagenFondoMostrar');
