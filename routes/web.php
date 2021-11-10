<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\setKonten;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\tampilAdmin;
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

Route::get('/mainpost', function () {
    return view('layout.mainpost');
});

Route::get('/2', function () {
    return view('website.binahal');
});

Route::get('/3', function () {
    return view('website.gundaling');
});

Route::get('/1', function () {
    return view('website.lumbini');
});

Route::get('/4', function () {
    return view('website.salju');
});

Route::get('/5', function () {
    return view('website.sipiso');
});

Route::get('/6', function () {
    return view('website.linting');
});

Route::get('/7', function () {
    return view('website.pantai');
});

Route::get('/8', function () {
    return view('website.cagar');
});

Route::get('/10', function () {
    return view('website.istana');
});

Route::get('/9', function () {
    return view('website.bukit');
});

//route CRUD
Route::get('/', [TempatController::class, 'index']);
// Route::get('/tempat','TempatController@index');

// Route::get('/tempat/cari','TempatController@cari');

//Route search
Route::get('/search', [TempatController::class, 'search'])->name('search');

Route::get('adminPg', function(){
    return view('layout.tpadmin');
});

Route::group(['middleware' => 'cekLoginInverse'], function(){
    Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::group(['middleware' => 'cekLogin'], function(){
    Route::get('plusK', [setKonten::class, 'tampilAddKonten'])->name('tambahKonten');
    Route::post('plusK', [setKonten::class, 'addKonten']);
    Route::get('editK', [setKonten::class, 'tampilEditKonten'])->name('editKonten');
    Route::post('editK', [setKonten::class, 'editKonten']);
    Route::get('akunSet', [tampilAdmin::class, 'tampilSetAkun'])->name('setting');
    Route::post('akunSet', [tampilAdmin::class, 'setAkun']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['middleware' => 'cekLevel'], function(){
        Route::get('admin', [tampilAdmin::class, 'admin'])->name('admin');
        //Route::post('admin'. 'setKonten@hapusAkun');
        Route::get('listK', [tampilAdmin::class, 'listKonten'])->name('listK');
        Route::post('listK', [setKonten::class, 'hapusKonten']);
        Route::put('editK', [setKonten::class, 'tampilEditKonten']);
    });
});