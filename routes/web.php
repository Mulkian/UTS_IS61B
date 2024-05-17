<?php

use App\Http\controllers\CostumerController;
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


Route::controller(CostumerController::class)->prefix('costumer')->group(function(){
    Route::get('','index')->name('costumer');
});
