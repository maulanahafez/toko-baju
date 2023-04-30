<?php

use App\Http\Controllers\BajuController;
use App\Http\Controllers\JenisBajuController;
use App\Http\Controllers\PenjualanController;
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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::resources([
    'baju' => BajuController::class,
    'jenisbaju' => JenisBajuController::class,
    'penjualan' => PenjualanController::class,
]);

Route::delete('/jenisbaju/{jenisBaju:id}', [JenisBajuController::class, 'destroy'])->name('jenisbajudestroy');