<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RespondentController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RespondentPageController;


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

Route::get('/respondentpage', [RespondentPageController::class, 'index'])->name('respondent_page');
Route::get('/respondent_success_page', [RespondentPageController::class, 'success'])->name('respondent_success_page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/print', [App\Http\Controllers\HomeController::class, 'print'])->name('print');

// Respondent
Route::group(['controller' => RespondentController::class, 'prefix' => 'respondent', 'as' => 'respondent.'], function () {
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/report_respondent_pdf', 'report_respondent_pdf')->name('report_respondent_pdf');
    Route::get('/report_pdf/{id}', 'report_pdf')->name('report_pdf');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

// Questionnaire
Route::group(['controller' => QuestionnaireController::class, 'prefix' => 'questionnaire', 'as' => 'questionnaire.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});


// User
Route::group(['controller' => UserController::class, 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/create', 'create')->name('create');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/show/{id}', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
