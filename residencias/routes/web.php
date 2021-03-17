<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use  App\Http\Controllers\AlumnosController;

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





/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/alumnos','AlumnosController@index');
Route::get('/alumnos/create','AlumnosController@create');*/
//Route::get('/alumnos', [AlumnosController::class, 'index']);
//Route::get('/alumnos/create', [AlumnosController::class, 'create']);
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/administracion', function () {
    return view('carreras.administracion');
});

Route::get('/contador', function () {
    return view('carreras.contabilidad');
});

Route::get('/ige', function () {
    return view('carreras.ige');
});

Route::get('/industrial', function () {
    return view('carreras.industrial');
});

Route::get('/logistica', function () {
    return view('carreras.logistica');
});

Route::get('/tics', function () {
    return view('carreras.tics');
});

Route::get('/sistemas', function () {
    return view('carreras.sistemas');
});

Route::get('/electrica', function () {
    return view('carreras.electrica');
});

Route::get('/electronica', function () {
    return view('carreras.electronica');
});

Route::get('/mecatronica', function () {
    return view('carreras.mecatronica');
});

Route::get('/mecanica', function () {
    return view('carreras.mecanica');
});

Route::get('/electromecanica', function () {
    return view('carreras.electromecanica');
});

Route::resource('alumnos', AlumnosController::class)->middleware('auth');
Auth::routes([]);
//Elimina la opción de register.
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});
//Elimina olvide pass.
Route::match(['get', 'post'], 'forgot-password', function(){
    return redirect('/');
});
//
Route::match(['get', 'post'], 'password/reset', function(){
    return redirect('/');
});

Route::get('/home', [App\Http\Controllers\AlumnosController::class, 'index'])->name('home');
//Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\AlumnosController::class, 'index'])->name('home');

Route::get('students', [App\Http\Controllers\AlumnosController::class, 'students'])->name('students.index')->middleware('auth');
