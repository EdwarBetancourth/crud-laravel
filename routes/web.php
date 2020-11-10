<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@getHome');

Route::get('/login',function(){
    return "Logout usuario";
});

Route::get('/logout',function(){
    return "Logout usuario";
});

Route::get('/catalog', 'CatalogController@getIndex');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/create', 'CatalogController@getCreate');
Route::post('/catalog/create', 'CatalogController@save');
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
Route::put('/catalog/edit/{id}', 'CatalogController@update');
Route::put('/catalog/rented/{id}', 'CatalogController@rented');
Route::delete('/catalog/delete/{id}', 'CatalogController@delete');

//Route::resource('catalog', 'CatalogController');
