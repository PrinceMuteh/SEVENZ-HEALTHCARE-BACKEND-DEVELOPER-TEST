<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicalRecordController;


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

Route::post('register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/create-record', [MedicalRecordController::class, 'CreateRecord'])->middleware('auth:sanctum');;
Route::get('/get-record/{id}', [MedicalRecordController::class, 'GetRecord'])->middleware('auth:sanctum');;
