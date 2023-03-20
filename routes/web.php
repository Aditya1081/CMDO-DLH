<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\spekalatController;
use App\Http\Controllers\detailalatController;

use App\Models\Alat;
use App\Models\SpekAlat;

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
    return view('admin.index');
});


Route::prefix('alat')->group(function(){
    Route::get('/index', [AlatController::class,'index'])->name('alat.view');
    Route::get('/add', [AlatController::class,'create'])->name('alat.add');
    Route::post('/store', [AlatController::class,'store'])->name('alat.store');
    Route::get('/edit/{id}', [AlatController::class,'edit'])->name('alat.edit');
    Route::post('/update/{id}', [AlatController::class,'update'])->name('alat.update');
    Route::get('/delete/{id}', [AlatController::class,'delete'])->name('alat.delete');
});
Route::prefix('spekalat')->group(function(){
    Route::get('/index', [spekalatController::class,'index'])->name('spekalat.view');
    Route::get('/add', [spekalatController::class,'create'])->name('spekalat.add');
    Route::post('/store', [spekalatController::class,'store'])->name('spekalat.store');
    Route::get('/edit/{id}', [spekalatController::class,'edit'])->name('spekalat.edit');
    Route::post('/update/{id}', [spekalatController::class,'update'])->name('spekalat.update');
    Route::post('/delete/{id}', [spekalatController::class,'delete'])->name('spekalat.delete');
});
Route::prefix('detailalat')->group(function(){
    Route::get('/index', [detailalatController::class,'index'])->name('detailalat.view');
    Route::get('/indexdetail', [detailalatController::class,'indexdetail'])->name('detailalat.detail');
    Route::get('/add', [detailalatController::class,'create'])->name('detailalat.add');
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');  /{id}
    Route::get('/edit', [detailalatController::class,'edit'])->name('detailalat.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');
});