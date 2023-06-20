<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proyecto_u_distrital\UsersController;
use App\Http\Controllers\proyecto_u_distrital\ContactsController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/user",[UsersController::class,'read']);
Route::post("/user",[UsersController::class,'create']);
Route::put("/user",[UsersController::class,'update']);
Route::delete("/user",[UsersController::class,'delete']);


Route::get("/contact",[ContactsController::class,'read']);
Route::post("/contact",[ContactsController::class,'create']);
Route::put("/contact",[ContactsController::class,'update']);
Route::delete("/contact",[ContactsController::class,'delete']);
