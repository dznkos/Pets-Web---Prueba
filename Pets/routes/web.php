<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contacto', function () {
    return view('contacto');
})->name('contact');

Route::get('/detalles', function () {
    return view('show');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
Route::get('/usuarios', function () {
    return 'Lista de Usuarios';
});
Route::get('/usuario/{id}', function($id){
    return 'Este es el Usuario nroº '.$id;
})->where('id','[0-9]+'
);
Route::get('/user/{name?}', function($name='Invitado'){
    return 'Este es el Usuario: '.$name;
})->where('name','[A-Za-z]+');*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
