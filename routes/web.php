<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::view('/movies', 'show');