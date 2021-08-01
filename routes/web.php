<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainerController;//import


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

//route resource for TrainerController
Route::resource('trainer',
    '\App\Http\Controllers\TrainerController');

//route resource for TrainingController
Route::resource('training',
    '\App\Http\Controllers\TrainingController');

//route to call TrainerController@create
//laravel8 redo route declaration
//Route::get('/trainer/create',
    //[TrainerController::class, 'create'])//pointing to function create
    //->name('trainer.create');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
