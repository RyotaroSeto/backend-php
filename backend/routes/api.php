<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Resources\CraftsmanResource;
use App\Models\Craftsman;
use App\Http\Controllers\CraftsmanController;
use App\Http\Controllers\ProfileController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', [CraftsmanController::class, 'index']);
Route::get('/test', [CraftsmanController::class, 'index']);
// Route::get('/api/test', [CraftsmanController::class, 'index']);
// Route::post('/', [CraftsmanController::class, 'index']);
// Route::get('/{id}', [CraftsmanController::class, 'index']);
Route::post('/insert', [CraftsmanController::class, 'insert']);
Route::get('/profile/get', [ProfileController::class, 'index']);

// Route::group(['prefix' => '/auth', ['middleware' => 'throttle:20,5']], function () {
//     Route::post('/register', [RegisterController::class, 'register']);
//     Route::post('/login', [LoginController::class, 'login']);
// });

// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('/me', [MeController::class, 'index']);
//     Route::get('/auth/logout', [MeController::class, 'logout']);
// });
