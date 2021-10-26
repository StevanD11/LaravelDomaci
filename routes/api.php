<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\KompanijaController;
use App\Http\Controllers\API\ZaposleniController;


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

Route::post('kompanija', [KompanijaController::class, 'store']);
Route::get('kompanija', [KompanijaController::class, 'index']);
Route::get('kompanija/{id}', [KompanijaController::class, 'show']);
Route::put('kompanija/{id}', [KompanijaController::class, 'update']);
Route::delete('kompanija/{id}', [KompanijaController::class, 'destroy']);

Route::post('zaposleni', [ZaposleniController::class, 'store']);
Route::get('zaposleni', [ZaposleniController::class, 'index']);
Route::get('zaposleni/{id}', [ZaposleniController::class, 'show']);
Route::put('zaposleni/{id}', [ZaposleniController::class, 'update']);
Route::delete('zaposleni/{id}', [ZaposleniController::class, 'destroy']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
