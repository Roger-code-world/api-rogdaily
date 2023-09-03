<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api_rogercode_v1\AuthrogercodeController;
use App\Http\Controllers\api_rogercode_v1\ProyectsrogercodeController;
use App\Http\Controllers\api_rogercode_v1\NotesrogercodeController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('login', [AuthrogercodeController::class, 'authLogin']);

Route::middleware('auth:api')->group(function () {
    Route::get('/getProyects', [ProyectsrogercodeController::class, 'index']);
    Route::get('/finNotesOfProyects/{id}', [ProyectsrogercodeController::class, 'show']);
    Route::post('/saveNote', [NotesrogercodeController::class, 'store']);
    Route::post('/updateStatusNote', [NotesrogercodeController::class, 'update']);
    Route::delete('/deleteNote/{id}', [NotesrogercodeController::class, 'destroy']);
});
