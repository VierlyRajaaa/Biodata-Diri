
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

// Route Public (Root Path)
Route::get('/', [BiodataController::class, 'index'])
    ->name('home');

// Route Admin
Route::prefix('admin')->group(function () {

    Route::get('/biodata', [BiodataController::class, 'admin'])
        ->name('admin.biodata');

});
