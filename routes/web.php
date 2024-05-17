<?php

use App\Http\Controllers\CostumerController;
use Illuminate\Support\Facades\Route;

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

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(CostumerController::class)->prefix('costumer')->group(function() {
    Route::get('', 'index')->name('costumer');
    Route::get('insert', 'add')->name('costumer.insert');
    Route::post('insert', 'insert')->name('costumer.add.insert');
    Route::get('edit/{id}', 'edit')->name('costumer.edit'); // Route for edit costumer
    Route::put('update/{id}', 'update')->name('costumer.update'); // Route for updating costumer
    Route::delete('{id}', 'destroy')->name('costumer.destroy')->middleware('auth'); // Route for deleting costumer
});
