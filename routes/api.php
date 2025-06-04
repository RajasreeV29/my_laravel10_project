<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackagemodelController;
use App\Http\Controllers\Api\PackagesApiiController;
use App\Http\Controllers\Api\PackagesController;
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
// Route::middleware('api')->group(function (): void {
//     Route::put('/packages/{id}',[PackagesController::class,'update']);
   
// });

// Route::get('package', [PackagesController::class, 'show']);
// Route::post('create_package', [PackagesController::class, 'create_package'])->name('create_package');;

// Route::get('view_package', [PackagesController::class, 'view_package']);

// Route::get('edit_package/{id}', [PackagesController::class, 'edit_package']);

// Route::delete('delete_package', [PackagesController::class, 'delete']);

// Route::get('testing',function(){
//  return 'this is a test api';
// });
Route::apiResource('packagemod',PackagesApiiController::class);

