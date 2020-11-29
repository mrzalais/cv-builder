<?php

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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('userinfo', 'UserDataController')->middleware(['auth'])
    ->except(['index', 'show']);

Route::resource('education', 'EducationController')
    ->middleware(['auth']);

Route::resource('experience', 'ExperienceController')
    ->middleware(['auth']);

Route::resource('skill', 'SkillController')
    ->middleware(['auth']);

Route::resource('cv', 'CvController')->middleware('auth');

Route::get('userinfo','UserDataController@index')->name('userinfo.index');
Route::get('userinfo/{user}','UserDataController@show')->name('userinfo.show');
