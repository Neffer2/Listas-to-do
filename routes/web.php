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

Rutas Básicas

// Ruta normal
Route::get('!!!',function(){
	return 'Prueba de ruta';
	//http://127.0.0.1:8000/!!!
});

// ruta con parámetros
Route::get('Param/{id}',function($ID){
	return $ID;
	// http://127.0.0.1:8000/Param/15
});

// ruta con varios parámetros
Route::get('Nombre/{Nombre}/Edad/{Edad}', function ($NOm, $Edad) {
    return "Nombre: $NOm <br> Edad: $Edad.";
    //http://127.0.0.1:8000/Nombre/Neffer/Edad/18
});

// ruta con parámetros opcionales 
Route::get('Nombre/{Nom?}',function($Nom = 'Pedro'){
	return "Nombre $Nom";
	//http://127.0.0.1:8000/Nombre/Juan
	//http://127.0.0.1:8000/Nombre
});

// Parametros restringidos (se pueden dejar espacios en los nombres de las rutas)
Route::get('Nombre y edad/{Nom}/{Age}',function($NomV,$AgeV){
	return "Nombre: $NomV <br> Edad: $AgeV";
	//http://127.0.0.1:8000/Nombre 20y 20edad/neffer/6

})->where(['Nom' => '[a-z]+', 'Age' => '[1-9]']);


// Enrutar con controlador
Route::get('user/{id}', 'UserController@show');

 @show: es un metodo que está dentro de la clase del controlador (El método del controlador también recibe los parametros que envíe la ruta)


 Route::get('Identificacion/{id}','prueba@Motrar');
 http://127.0.0.1:8000/Identificacion/15
 // Si o si se debe especifiacar el metodo al que se dirige osea el @Motrar

 Route::resource('photos', 'PhotoController'); // llama a un controlador, y crea rutas para todos sus metodos (Resource controllers)


Route::get('/Cons/{dd}','prueba'); La ruta de un Controller tipo __invoke

*/


Route::get('/', function () {
     return view('welcome');
});

Route::get('/exit','HomeController@Salir');


Route::post('/save', 'HomeController@Guardar');

Route::post('/delete','HomeController@Borrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Home');
