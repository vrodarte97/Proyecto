<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use  App\Http\Controllers\AlumnosController;
use  App\Http\Controllers\PadresController;
use  App\Http\Controllers\OrientatecController;
use  App\Http\Controllers\AspirantesController;

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

Route::get('/360', function () {
    return view('recorrido.test');
});

Route::get('/administrativo', function () {
    return view('recorrido.administrativo');
});

Route::get('/extraescolares', function () {
    return view('recorrido.extraescolares');
});

Route::get('/audiovisual', function () {
    return view('recorrido.audiovisual');
});

Route::get('/800', function () {
    return view('recorrido.800');
});

Route::get('/biblioteca', function () {
    return view('recorrido.biblioteca');
});

Route::get('/computo', function () {
    return view('recorrido.computo');
});

Route::get('/idiomas', function () {
    return view('recorrido.idiomas');
});

Route::get('/ciencias-basicas', function () {
    return view('recorrido.ciencias');
});

Route::get('/elect', function () {
    return view('recorrido.electrica');
});

Route::get('/dpto-industrial', function () {
    return view('recorrido.industrial');
});

Route::get('/dpto-sistemas', function () {
    return view('recorrido.sistemas');
});

Route::get('/division-metal', function () {
    return view('recorrido.division');
});

Route::get('/guillot', function () {
    return view('recorrido.guillot');
});

Route::get('/gestion-vinculacion', function () {
    return view('recorrido.gestion');
});

Route::get('/laboratorio-electrica', function () {
    return view('recorrido.labelectrica');
});

Route::get('/manufactura', function () {
    return view('recorrido.manufactura');
});

Route::get('/lab-mecatronica', function () {
    return view('recorrido.labmeca');
});

Route::get('/metal', function () {
    return view('recorrido.metal');
});

Route::get('/quimica', function () {
    return view('recorrido.quimica');
});

Route::get('/posgrado', function () {
    return view('recorrido.posgrado');
});

Route::get('/rivera-lara', function () {
    return view('recorrido.rivera');
});





//RUTAS DE ALUMNOS
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
//TERMINA RUTAS DE ALUMNOS


//RUTAS DE PADRES
Route::resource('padres', PadresController::class)->middleware('auth');
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

//Route::get('/home', [App\Http\Controllers\PadresController::class, 'index'])->name('home');
//Auth::routes();
//Route::get('/dashboard', [App\Http\Controllers\PadresController::class, 'index'])->name('home');

//Route::get('dads', [App\Http\Controllers\PadresController::class, 'dads'])->name('dads.indexPadres')->middleware('auth');
//TERMINA RUTAS DE PADRES




//RUTAS DE ORIENTATEC
Route::resource('aspirantes', AspirantesController::class)->middleware('auth');
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

//Route::get('/home', [App\Http\Controllers\AspirantesController::class, 'index'])->name('home');
//Auth::routes();
//Route::get('/dashboard', [App\Http\Controllers\AspirantesController::class, 'index'])->name('home');

//Route::get('students1', [App\Http\Controllers\AspirantesController::class, 'students1'])->name('students1.indexAlumnos')->middleware('auth');
//TERMINA RUTAS DE ORIENTATEC