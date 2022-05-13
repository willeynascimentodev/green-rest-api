<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ResiduoController;
use App\Http\Controllers\Api\UserController;
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

Route::group(['middleware' => ['api.jwt']], function() {
    Route::resource('residuos', ResiduoController::class)->names('residuos');
});

Route::resource('users', UserController::class)->names('users');