<?php

use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ResidentController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PackageApiController;
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
    return view('package');
})->name('package');
// Route::get('package', [PackagesController::class, 'package'])->name('package');;
// Route::post('add_package', [PackagesController::class, 'store'])->name('add_package');;
// // Route::post('create', [PackagesController::class, 'add_package'])->name('create');;
// Route::get('add_package', [PackageApiController::class, 'add_package']);


// Route::get('view_package', [PackagesController::class, 'index'])->name('view_package')->name('view_package');;
// Route::post('/delete_package', [PackagesController::class, 'delete'])->name('delete_package');
// Route::resource('package',PackagesController::class);
Route::resource('resident',ResidentController::class);
