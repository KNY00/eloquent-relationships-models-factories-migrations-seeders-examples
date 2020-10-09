<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GettingStarted\FlightController;
use App\Http\Controllers\GettingStarted\DestinationController;
use App\Http\Controllers\GettingStarted\UserController as GetUserController;
use App\Http\Controllers\OneToOne\UserController as UserControl;
use App\Http\Controllers\OneToOne\PhoneController;
use App\Http\Controllers\OneToMany\CommentController;
use App\Http\Controllers\OneToMany\PostController;
use App\Http\Controllers\ManyToMany\RoleController;
use App\Http\Controllers\ManyToMany\UserController;
use App\Http\Controllers\HasOneThroughController;
use App\Http\Controllers\HasManyThroughController;

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
    return view('welcome');
});

Route::prefix('getting_started')->group(function () {
    Route::resource('flights', FlightController::class);
    Route::resource('destinations', DestinationController::class);
    Route::get('users/{id}/{withoutAgeLimitation?}', [GetUserController::class, 'show']);
});

Route::prefix('one_to_one')->group(function () {
    Route::resource('users', UserControl::class);
    Route::resource('phones', PhoneController::class);
});

Route::prefix('one_to_many')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('comments', CommentController::class);
});

Route::prefix('many_to_many')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::resource('has_one_through', HasOneThroughController::class);
Route::resource('has_many_through', HasManyThroughController::class);
