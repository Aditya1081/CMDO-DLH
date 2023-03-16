<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;


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
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');
    Route::get('/edit', [AlatController::class,'edit'])->name('alat.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');
   
});