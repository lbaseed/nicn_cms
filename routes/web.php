<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// function activeMenu($uri = '')
// {
//     $active = '';
//     if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
//         $active = 'active';
//     }
//     return $active;
// }

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->get('', function () {
//     // Route::get("/rides/search/{name}", [RidesController::class, 'search']);
//     // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//     });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// add new case 
    Route::get('/case-form', [CaseController::class, 'addCaseForm']);
    Route::post('/case-form', [CaseController::class, 'addCase']);
// Filter cases
    Route::get('/cases', [CaseController::class, 'index']);
    Route::post('/cases', [CaseController::class, 'divisionCases']);
// cases returnn
    Route::get('/cases-return', [CaseController::class, 'casesReturn']);

// search route
    Route::get('/search', [CaseController::class, 'searchCases']);
// Manage cases
    Route::get('/case/{id}/edit', [CaseController::class, 'edit']);
    Route::get('/case/{id}', [CaseController::class, 'show']);
    Route::put('/case/{id}/edit', [CaseController::class, 'update']);

    // test pdf gen
    Route::post("/get-quarter", [CaseController::class, 'generate']);
    Route::get("/get-quarter", [CaseController::class, 'casesReturn']);

// Archive Cases to completion
    Route::get("/archive-case", [CaseController::class, 'archive']);
    Route::post("/archive-case", [CaseController::class, 'archiveUpdate']);

// Settings //create complaint form // create stage routes
    Route::get("/settings", [SettingsController::class, 'index']);

    Route::post("/create-complaint-form", [SettingsController::class, 'createComplaintForm']);
    Route::post("/create-stage", [SettingsController::class, 'createCaseStage']);

// Manage Users Route
    Route::get("/system-users", [UsersController::class, "index"]);
    Route::post("/system-users", [UsersController::class, "store"]);
    Route::get("/system-user/{id}", [UsersController::class, "show"]);

// change password
Route::get("/change-password", [UsersController::class, "changePassword"]);
Route::post("/edit-password", [UsersController::class, "editPassword"]);

 
});
