<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::resource('educations', 'EducationController');

});

Route::any('/optimize', function () {
    Artisan::call('route:clear');
    Artisan::call('optimize');
    echo 'Optimized Successfully';
});
Route::any('/migrate', function () {
    Artisan::call('migrate');
    echo 'Migrated Successfully';
});
