<?php

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


//PROTECTED BY AUTH
// Route::group(['middleware' => ['auth:sanctum']], function(){
    //USER ROUTES
    Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show']);
    Route::get('/user/{id}/vragenlijsten', [App\Http\Controllers\UserController::class, 'vragenlijsten']);
    Route::get('/user/{id}/categorieen', [App\Http\Controllers\UserController::class, 'categorieen']);
    Route::get('/user/{id}/mailgroepen', [App\Http\Controllers\UserController::class, 'mailgroepen']);

    //MAILGROEP ROUTES
    Route::get('/mailgroep/{id}', [App\Http\Controllers\MailgroepController::class, 'show']);
    Route::get('/mailgroep/{id}/emailadressen', [App\Http\Controllers\MailgroepController::class, 'emailadressen']);

    Route::post('/mailgroep/create', [App\Http\Controllers\EmailadresController::class, 'create']);

    //VRAGENLIJST ROUTES
    Route::get('/vragenlijst/{id}', [App\Http\Controllers\VragenlijstController::class, 'show']);
    Route::get('/vragenlijst/{id}/vragen', [App\Http\Controllers\VragenlijstController::class, 'vragen']);
    Route::get('/vragenlijst/{id}/codes', [App\Http\Controllers\VragenlijstController::class, 'codes']);

    //VRAAG ROUTES
    Route::get('/vraag/{id}', [App\Http\Controllers\VraagController::class, 'show']);
    Route::get('/vraag/{id}/antwoorden', [App\Http\Controllers\VraagController::class, 'antwoorden']);
    Route::get('/vraag/{id}/vraagsoort', [App\Http\Controllers\VraagController::class, 'vraagsoort']);
    Route::get('/vraag/{id}/categorie', [App\Http\Controllers\VraagController::class, 'categorie']);
// });



//CODE ROUTES
Route::get('/code/{code}', [App\Http\Controllers\CodeController::class, 'show']);
Route::get('/code/{code}/vragenlijst', [App\Http\Controllers\CodeController::class, 'vragenlijst']);


//REGISTER ROUTE OWO
Route::POST('/users/create', [App\Http\Controllers\UserController::class, 'register']);


