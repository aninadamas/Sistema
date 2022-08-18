<?php

use App\Http\Controllers\formularioController;
use App\Http\Controllers\PlanillaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);



});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('formulario', 'App\Http\Controllers\formularioController', ['except' => ['show']]);
    Route::get('/form-permiso', ['as' => 'form-permiso.form-permiso', 'uses' => 'App\Http\Controllers\formularioController@index']);

Route::post('/form-permiso', ['as' => 'formulario.store', 'uses' => 'App\Http\Controllers\formularioController@store']);
Route::get('misolicitud', ['as' => 'estado', 'uses' => 'App\Http\Controllers\formularioController@estado']);

//SUPERVISOR

    Route::get('/supervisor', ['as' => 'supervisor', 'uses' => 'App\Http\Controllers\SupervisorController@index']);

    Route::get('planilla/funcionario/{id}', ['as' => 'supervisor.create', 'uses' => 'App\Http\Controllers\SupervisorController@create']);
    Route::get('planilla/solicitud/aprobada/{id}', ['as' => 'supervisor.confirmar', 'uses' => 'App\Http\Controllers\SupervisorController@confirmar']);
    Route::get('planilla/solicitud/pendiente/{id}', ['as' => 'supervisor.archivar', 'uses' => 'App\Http\Controllers\SupervisorController@archivar']);
    Route::get('planilla/solicitud/rechazada/{id}', ['as' => 'supervisor.rechazar', 'uses' => 'App\Http\Controllers\SupervisorController@rechazar']);

    Route::get('inicio', ['as' => 'supervisor.inicio', 'uses' => 'App\Http\Controllers\SupervisorController@inicio']);
    //PERMISOS PENDIENTES:
    Route::get('/permisos/pendientes', ['as' => 'supervisor.pendiente', 'uses' => 'App\Http\Controllers\SupervisorController@permiso_pendiente']);
    Route::get('/permisos/pendientes/{id}', ['as' => 'supervisor.planillapendiente', 'uses' => 'App\Http\Controllers\SupervisorController@planillapendiente']);
    Route::get('/permisos/pendiente/{id}', ['as' => 'supervisor.aprobarpendiente', 'uses' => 'App\Http\Controllers\SupervisorController@aprobarpendiente']);
    Route::get('/permiso/pendiente/{id}', ['as' => 'supervisor.rechazarpendiente', 'uses' => 'App\Http\Controllers\SupervisorController@rechazarpendiente']);

    //PERMISOS RECHAZADOS
    Route::get('/permisos/rechazados', ['as' => 'supervisor.permiso_rechazado', 'uses' => 'App\Http\Controllers\SupervisorController@permiso_rechazado']);
    Route::get('/permisos/rechazado/{id}', ['as' => 'supervisor.planillarechazado', 'uses' => 'App\Http\Controllers\SupervisorController@planillarechazado']);
    Route::get('/solicitud/rechazado/{id}', ['as' => 'supervisor.apruebarechazado', 'uses' => 'App\Http\Controllers\SupervisorController@apruebarechazado']);

    Route::get('/permisos/aprobadas', ['as' => 'supervisor.aprobadas', 'uses' => 'App\Http\Controllers\SupervisorController@aprobadas']);
    Route::get('/solicitud/aprobado/{id}', ['as' => 'supervisor.planillaaprobado', 'uses' => 'App\Http\Controllers\SupervisorController@planillaaprobado']);

    //RECURSOS HUMANOS
    Route::get('/rrhh', ['as' => 'rrhh', 'uses' => 'App\Http\Controllers\RecursosController@index']);
    Route::get('/planilla/{id}', ['as' => 'rrhh.planilla', 'uses' => 'App\Http\Controllers\RecursosController@create']);
    Route::get('/solicitud/{id}', ['as' => 'rrhh.aprobar', 'uses' => 'App\Http\Controllers\RecursosController@aprobar']);
    Route::get('/solicitud_/{id}', ['as' => 'rrhh.rechazar', 'uses' => 'App\Http\Controllers\RecursosController@rechazar']);

});

