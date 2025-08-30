<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaqafApplicationController;

Route::get('/', function () {
    return redirect()->route('waqaf.index');
});

Route::resource('waqaf', WaqafApplicationController::class);
Route::get('waqaf/{waqaf}/print', [WaqafApplicationController::class, 'print'])->name('waqaf.print');
