<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
// use App\Http\Controllers\FilesController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('patients','PatientController');

Route::get('patients/get/1', 'App\Http\Controllers\PatientController@get');
Route::post('patients/store', 'App\Http\Controllers\PatientController@store');
Route::get('patients/{id}/getPatient','App\Http\Controllers\PatientController@getPatient');
Route::get('patients/{id}/delete', 'App\Http\Controllers\PatientController@delete');
Route::post('patients/update', 'App\Http\Controllers\PatientController@update');

Route::resource('files', 'FilesController');
Route::get('files/{id}/get', 'App\Http\Controllers\FilesController@get');
Route::post('files/store','App\Http\Controllers\FilesController@store');
Route::get('files/{id}/delete', 'App\Http\Controllers\FilesController@delete');
