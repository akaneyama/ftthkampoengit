<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\userftthController;

Route::get('/ftth', [UserFtthController::class, 'index'])->name('ftth.index');
Route::get('/ftth/{userftth}', [UserFtthController::class, 'show'])->name('ftth.show');
use App\Http\Controllers\FatController;

Route::resource('fat', FatController::class);