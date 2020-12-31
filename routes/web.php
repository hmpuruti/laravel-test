<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
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



//Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
 * User Card route
 * Accents user id
 * returns user card view for valid user
 */
Route::get('/user/{id}', [UsersController::class, 'show'])->name('user-card');

//Tested using API method
//Route::post('/user/comment', [CommentsController::class, 'comment'])->name('post-comment');
