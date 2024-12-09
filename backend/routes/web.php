<?php

use App\Http\Controllers\PandaController;
use Illuminate\Support\Facades\Route;

Route::get('api/pandas', [PandaController::class, 'index'])->name('pandas.index');
Route::get('api/pandas/{id}', [PandaController::class, 'show'])->name('pandas.show');