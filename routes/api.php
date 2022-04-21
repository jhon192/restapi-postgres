<?php

use App\Http\Controllers\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/schedule", [ScheduleController::class, 'index']);
Route::get("/schedule/{id}", [ScheduleController::class, 'show']);
Route::post("/schedule", [ScheduleController::class, 'store']);
Route::put("/schedule/{id}", [ScheduleController::class, 'update']);
Route::delete("/schedule/{id}", [ScheduleController::class, 'destroy']);