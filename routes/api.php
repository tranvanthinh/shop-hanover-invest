<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\GoogleController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/redirect', [GoogleController::class, 'getGoogleSignInUrl']);
Route::get('/callback', [GoogleController::class, 'loginCallback']);
