<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PandaController;

Route::get('/pandas', [PandaController::class, 'index'])->name('pandas.index');
Route::get('/pandas/{id}', [PandaController::class, 'show'])->whereNumber('id')->name('pandas.show');
Route::delete('/pandas/{id}', [PandaController::class, 'destroy'])->whereNumber('id')->name('pandas.destroy');
Route::post('/pandas', [PandaController::class, 'store'])->name('pandas.store');
