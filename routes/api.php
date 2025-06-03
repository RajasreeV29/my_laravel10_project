<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PackageApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('package', [PackageApiController::class, 'show']);
Route::post('create_package', [PackageApiController::class, 'create_package'])->name('create_package');;

Route::get('view_package', [PackageApiController::class, 'view_package']);

Route::get('edit_package/{id}', [PackageApiController::class, 'edit_package']);

Route::delete('delete_package', [PackageApiController::class, 'delete']);

