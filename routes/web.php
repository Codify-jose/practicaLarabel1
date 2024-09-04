<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nombre'=>'José', 'apellido'=>'Roque']);
});
//Ruta para mostrar la vista show.blade.php 
Route::get('/products/show', function (){
    return view('products/show', ['producto'=>'Camisa Sport']);
});

//Ruta para mostrar la vista create.blade.php
Route::get('/products/create', function(){
    return view('products/create');
});

//Ruta para mostrar la vista update.blade.php 
Route::get('products/update', function(){
    return view('products/update');
});

//Ruta para mostrar la vista update.blade.php de categorias
Route::get('categorias/update', function(){
    return view('categorias/update');
});

//Ruta para mostrar la vista update.blade.php de categorias
Route::get('categorias/create', function(){
    return view('categorias/create');
});

//Ruta para mostrar la vista update.blade.php de categorias
Route::get('categorias/show', function(){
    return view('categorias/show');
});

//Ruta para mostrar la vista create.blade.php de clientes
Route::get('clientes/create', function(){
    return view('clientes/create');
});

//Ruta para mostrar la vista update.blade.php de categorias
Route::get('clientes/update', function(){
    return view('clientes/update');
});

//Ruta para mostrar la vista update.blade.php de categorias
Route::get('clientes/show', function(){
    return view('clientes/show');
});