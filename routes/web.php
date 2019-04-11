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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('consultar', 'ConsultaController@consulto');
Route::get('buscar', 'ConsultaController@busco')->name('buscar');

Route::post('/vistaconsulta', 'ConsultaController@abuscar');

Route::get('reportePDF', function(){
	$pdf = PDF::loadView('repdf');
	return $pdf->stream();
});

Route::get('crearpdf/{nombre}/{paterno}/{materno}/{expediente}/{fecha}',[
	"uses" => 'ConsultaController@crearpdf',
    "as" => 'crearpdf'
]);

Route::get('decapdf/{expediente}',[
	"uses" => 'ConsultaController@cDecalog',
    "as" => 'decapdf'
]);
