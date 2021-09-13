<?php

use App\Http\Controllers\CaseController;
use App\Http\Controllers\APIAuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user(); 
// });


// Public Routes
// Route::resource("rides", RidesController::class);
Route::post("/new-reg", [APIAuthController::class, 'register']);
Route::post("/login", [APIAuthController::class, 'login']);




// Route::middleware('auth:sanctum')->get('/user', function () {
// Route::get("/rides/search/{name}", [RidesController::class, 'search']);
// });

// protected routes

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get("/cases", [CaseController::class, 'index']); 
    Route::post("/case", [CaseController::class, 'store']);
    Route::put("/case/{id}", [CaseController::class, 'update']);
    Route::delete("/case/{id}", [CaseController::class, 'destroy']);
    Route::get("/case/{id}", [CaseController::class, 'show']);
    Route::get("/cases/search/{name}", [CaseController::class, 'search']);
    Route::post("/logout", [APIAuthController::class, 'logout']);
});
