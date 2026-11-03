<?php

use App\Http\Controllers\ApotekController;
use Illuminate\Support\Facades\Route;



Route::get('/apotek', [ApotekController::class, 'index'])->name('apotek.index');
Route::get('/apotek/create', [ApotekController::class, 'create'])->name('apotek.create');
Route::post('/apotek', [ApotekController::class, 'store'])->name('apotek.store');
Route::get('/apotek/{apotek}/edit', [ApotekController::class, 'edit'])->name('apotek.edit');
Route::put('/apotek/{apotek}', [ApotekController::class, 'update'])->name('apotek.update');
Route::delete('/apotek/{apotek}', [ApotekController::class, 'destroy'])->name('apotek.destroy');
Route::get('/apotek/{apotek}', [ApotekController::class, 'show'])->name('apotek.show');

Route::get('/', function () {
    return to_route('apotek.index');
});
