<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
<INDEX>
*/
Route::get('/', "IndexController@Index");

Route::post('/Contacto' , 'ContactoController@nuevo');

/*
</INDEX> 
*/