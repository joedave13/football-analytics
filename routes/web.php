<?php

use App\Http\Controllers\LandingController;
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

Route::get('club', [LandingController::class, 'club'])->name('landing.club');
Route::get('manager', [LandingController::class, 'manager'])->name('landing.manager');
Route::get('player', [LandingController::class, 'player'])->name('landing.player');
Route::get('stadium', [LandingController::class, 'stadium'])->name('landing.stadium');
Route::resource('/', LandingController::class);
