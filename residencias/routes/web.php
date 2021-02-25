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

