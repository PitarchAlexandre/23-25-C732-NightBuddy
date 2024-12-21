<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




// Les routes pour les évenements
Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show']);
Route::post('/events', [App\Http\Controllers\EventController::class, 'store']);
Route::put('/events/{id}', [App\Http\Controllers\EventController::class, 'update']);
Route::delete('/events/{id}', [App\Http\Controllers\EventController::class, 'destroy']);

// Les routes pour les utilisateurs
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show']);
Route::post('/users', [App\Http\Controllers\UserController::class, 'store']);
Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

// Les routes pour avoir des tableaux plus complets
// Les routes avec les evenements, les covoiturages et leur passagers
Route::get('/events/carpools/carpooling', [App\Http\Controllers\EventController::class, 'eventPeople']);
// Les covoiturage d'un évènement
Route::get('/events/{id}/carpools', [App\Http\Controllers\EventController::class, 'getCarpoolsByEvent']);
// Les covoiturages d'un evenemnt avec leur passagers
Route::get('/events/{id}/carpooling', [App\Http\Controllers\EventController::class, 'getCarpoolsWithPassengers']);
// Route de covoiturage
Route::post('/carpools', [App\Http\Controllers\CarpoolController::class, 'store']);



