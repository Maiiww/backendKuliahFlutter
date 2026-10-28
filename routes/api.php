<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request): User {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/getuser', [AuthController::class, 'getalluser']);
Route::post('/adduser', [AuthController::class, 'adduser']);
Route::put('/updateuser/{id}', [AuthController::class, 'updateuser']);
Route::delete('/deleteuser/{id}', [AuthController::class, 'deleteuser']);