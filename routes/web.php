<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
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
    return view('landing.pages.index');
});



Route::prefix('e-panel')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');
    Route::prefix('division')->group(function () {
        Route::get('/', [DivisionController::class, 'index'])->name('Division');
        Route::get('/list', [DivisionController::class, 'list'])->name('Division.list');
        Route::post('/store', [DivisionController::class, 'store'])->name('Division.store');
        Route::get('/detail/{id}', [DivisionController::class, 'detail'])->name('Division.detail');
        Route::post('/update', [DivisionController::class, 'update'])->name('Division.update');
        Route::delete('/delete', [DivisionController::class, 'destroy'])->name('Division.delete');
    });

    Route::prefix('team')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('Team');
        Route::get('/list', [TeamController::class, 'list'])->name('Team.list');
        Route::post('/store', [TeamController::class, 'store'])->name('Team.store');
        Route::get('/detail/{id}', [TeamController::class, 'detail'])->name('Team.detail');
        Route::post('/update', [TeamController::class, 'update'])->name('Team.update');
        Route::delete('/delete', [TeamController::class, 'destroy'])->name('Team.delete');
    });

    Route::prefix('player')->group(function () {
        Route::get('/', [PlayerController::class, 'index'])->name('Player');
        Route::get('/list', [PlayerController::class, 'list'])->name('Player.list');
        Route::post('/store', [PlayerController::class, 'store'])->name('Player.store');
        Route::get('/detail/{id}', [PlayerController::class, 'detail'])->name('Player.detail');
        Route::post('/update', [PlayerController::class, 'update'])->name('Player.update');
        Route::delete('/delete', [PlayerController::class, 'destroy'])->name('Player.delete');
    });

    Route::prefix('news')->group(function(){
        Route::get('/', [NewsController::class, 'index'])->name('News');
        Route::get('/list', [NewsController::class, 'list'])->name('News.list');
        Route::post('/store', [NewsController::class, 'store'])->name('News.store');
        Route::get('/detail/{id}', [NewsController::class, 'detail'])->name('News.detail');
        Route::post('/update', [NewsController::class, 'update'])->name('News.update');
        Route::delete('/delete', [NewsController::class, 'destroy'])->name('News.delete');
    });
});



require __DIR__ . '/auth.php';
