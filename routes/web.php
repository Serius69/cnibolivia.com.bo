<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatestController;
use App\Models\Latest;
use App\Models\Service;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| CRUD
|
*/
use App\Http\Controllers\LatestCRUDController;
use App\Http\Controllers\ServiceCRUDController;
use App\Http\Controllers\BannerCRUDController;
use App\Http\Controllers\TypelatestCRUDController;
use App\Http\Controllers\CourseCRUDController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/index', function () {
    return view('index');
});
Route::get('/indexasociados', function () {
    return view('indexasociados');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/calendario', function () {
    return view('calendario');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('representacion', function () {
    return view('/servicios/representacion');
});
Route::get('servicioalasociado', function () {
    return view('/servicios/servicioalasociado');
});
Route::get('serviciosjuridicos', function () {
    return view('/servicios/serviciosjuridicos');
});
Route::get('serviciosadicionales', function () {
    return view('/servicios/serviciosadicionales');
});
Route::get('serviciosentcis', function () {
    return view('/servicios/serviciosentcis');
});
Route::get('capacitaciones', function () {
    return view('/servicios/capacitaciones');
});
Route::get('noticiac', function () {
    return view('/latest/noticiac');
});
Route::get('nosotros', function () {
    return view('/nosotros');
});
Route::get('luchacontraelcontrabando', function () {
    return view('/luchacontraelcontrabando');
});

// .ROUTES WITH AUTHENTIFICATION
// Routing of latest
Route::controller(LatestController::class)->group(function(){
    Route::get('noticias/lista',  'list');
    Route::get('noticia/mostrar/?',  'view');
});
// Routing of couses
Route::controller(CourseController::class)->group(function(){
    Route::get('cursos/lista',  'list');
    Route::get('cursos/mostrar/?',  'view');
});
// Routing of latest crud
Route::controller(LatestCRUDController::class)->group(function(){
    Route::get('admin/latest', 'index')->middleware('auth');
    Route::get('admin/latest/show', 'show')->middleware('auth');
    Route::get('admin/latest/create', 'create')->middleware('auth');
    Route::get('admin/latest/edit', 'edit')->middleware('auth');
});
// Routing of latest crud
Route::controller(TypelatestCRUDController::class)->group(function(){
    Route::get('admin/typelatest', 'index')->middleware('auth');
    Route::get('admin/typelatest/create', 'create')->middleware('auth');
    Route::get('admin/typelatest/edit', 'edit')->middleware('auth');
});
// Routing of Service crud
Route::controller(ServiceCRUDController::class)->group(function(){
    Route::get('admin/service', 'index')->middleware('auth');
    Route::get('admin/service/show', 'show')->middleware('auth');
    Route::get('admin/service/create', 'create')->middleware('auth');
    Route::get('admin/service/edit', 'edit')->middleware('auth');
});
// Routing of Banner crud
Route::controller(BannerCRUDController::class)->group(function(){
    Route::get('admin/banner', 'index')->middleware('auth');
    Route::get('admin/banner/show', 'show')->middleware('auth');
    Route::get('admin/banner/create', 'create')->middleware('auth');
    Route::get('admin/banner/edit', 'edit')->middleware('auth');
});
// Routing of Banner crud
Route::controller(CourseCRUDController::class)->group(function(){
    Route::get('admin/course', 'index')->middleware('auth');
    Route::get('admin/course/show', 'show')->middleware('auth');
    Route::get('admin/course/create', 'create')->middleware('auth');
    Route::get('admin/course/edit', 'edit')->middleware('auth');
});
// Routing of latest crud
Route::controller(HomeController::class)->group(function(){
    Route::get('admin', 'admin')->middleware('auth');
    Route::get('/', 'index');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// CRUD
Route::resource('latests', LatestCRUDController::class)->middleware('auth');;
Route::resource('services', ServiceCRUDController::class)->middleware('auth');;
Route::resource('banners', BannerCRUDController::class)->middleware('auth');;
Route::resource('typelatests', TypelatestCRUDController::class)->middleware('auth');;
Route::resource('courses', CourseCRUDController::class)->middleware('auth');;
// LATEST
Route::resource('noticia', LatestController::class);
// SERVICE
Route::resource('servicio', ServiceController::class);
// COURSE
Route::resource('curso', CourseController::class);
// FILE STORAGE
Route::get('get/{filename}', [FileController::class, 'getfile'])->middleware('auth');
// ADMIN
Route::resource('admins', HomeController::class)->middleware('auth');
// 
Auth::routes();