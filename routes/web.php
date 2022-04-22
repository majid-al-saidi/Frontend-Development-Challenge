<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\QuizController;
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
    return view('welcome');
})->name('home');

Route::post('/quiz', [ParticipantController::class, 'register'])->name('register');
Route::post('result', [QuizController::class, 'result'])->name('result');
Route::get('board', [BoardController::class, 'index'])->name('board');