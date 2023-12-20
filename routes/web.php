<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('profile/{user}', [FrontController::class, 'profile'])->name('users.profile');
Route::get('cv/download/{user}', [FrontController::class, 'cvDownload'])->name('cv.download');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/optimize', function () {
    Artisan::call('route:clear');
    Artisan::call('optimize');
    echo 'Optimized Successfully';
});
Route::any('/migrate', function () {
    Artisan::call('migrate');
    echo 'Migrated Successfully';
});


Route::group(['prefix' => 'admin/', 'namespace' => 'App\Http\Controllers', 'middleware' => ['auth','admin']], function () {
    Route::resource('users', 'UserController');
    Route::resource('educations', 'EducationController');
    Route::resource('skills', 'SkillController');
    Route::resource('socials', 'SocialMediaController');
    Route::resource('projects', 'ProjectController');
    Route::resource('experiences', 'ExperienceController');
    Route::resource('certifications', 'CertificationController');
    Route::resource('settings', 'SettingController');

});
