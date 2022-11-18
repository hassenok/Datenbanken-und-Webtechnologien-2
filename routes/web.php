<?php

use App\Events\Maintenance;
use App\Http\Controllers\AbTestDataController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbArticlecategoryController;
use App\Http\Controllers\WarenkorbController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/testdata',[AbTestDataController::class,'AbTestData']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/isloggedin', [AuthController::class, 'isloggedin'])->name('haslogin');

Route::get('/ab_articlecategory',[AbArticlecategoryController::class,'Artikelkategorien']);


Route::get('/articles',[ArticlesController::class,'search']);

Route::get('/categories',[AbArticlecategoryController::class,'Artikelkategorien']);
Route::post('/newarticle', 'App\Http\Controllers\ArticlesController@newarticle')->middleware('auth');
Route::get('/newarticle', function () {
    return view('pages.newarticle');})->middleware('auth');

Route::get('/shoppingcart_items', [WarenkorbController::class,'getItems'])->middleware('auth');

Route::get('/newsite', function () {
    return view('pages.newsite');})->name('newsite')->middleware('auth');

Route::get('/admin', function () {return view('admin');})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/test', [ArticlesController::class, 'test'])->name('home');
