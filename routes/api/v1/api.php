<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Site\User\UserApiController;
use App\Http\Controllers\Api\V1\Site\Order\OrderApiController;
use App\Http\Controllers\Api\V1\Site\Order\UserOrderApiController;

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

//* User
Route::prefix('user')->group( function () {

    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::middleware('auth:api')->post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:api')->get('/users', [UserApiController::class, 'index'])->name('allUsers');

    Route::middleware('auth:api')->get('/current-user', [UserApiController::class, 'getCurrentUser'])->name('currentUser');

});
Route::middleware('auth:api')->group( function () {
  Route::apiResources([
    'orders' => OrderApiController::class,
    'user.orders' => UserOrderApiController::class,
  ]);
});