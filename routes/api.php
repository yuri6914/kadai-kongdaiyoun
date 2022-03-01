<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SquareCalculationController;
use App\Http\Controllers\CubeCalculationController;
use App\Http\Controllers\CircleCalculationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['middleware' => 'api'])->group(function () {
    Route::get('/sqrt', [SquareCalculationController::class, 'sqrt']);
    Route::get('/cube', [CubeCalculationController::class, 'cube']);
    Route::get('/CircleArea', [CircleCalculationController::class, 'CircleArea']);
    //  Route::post('/number', [RamdomNumberController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
   
   
});
