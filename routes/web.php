<?php



Route::view('/','Inicio')->name('Inicio');
Route::view('Programas','Programas')->name('Programas');
Route::get('Talleres','App\Http\Controllers\TalleresController@index')->name('Talleres');
Route::view('Asesoramiento','Asesoramiento')->name('Asesoramiento');
Route::view('Contacto','Contacto')->name('Contacto');


