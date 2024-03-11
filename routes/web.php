<?php

use Lib\Route;
use App\Controllers\HomeController;

/* Route::get('/', function(){
    return HomeController::class;
}); */

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
    return 'Hello World contact';
});
Route::get('/about', function(){
    return 'Hello World about';
});

Route::get('/courses/prueba', function(){
    return 'La jerarquia importa';   
});


Route::get('/courses/:slug', function($slug){
    return 'El slug es: ' . $slug;   
});

Route::dispatch();