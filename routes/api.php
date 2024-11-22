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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTE DE LA TABLE UTLISATEURS
// Appelle le controleur qui montre la liste des utilisateurs
Route::get('/utilisateurs', [App\Http\Controllers\UtilisateurController::class, 'index']);
// Appelle le controleur qui montre l'utilisateur mis en paramètre
Route::get('/utilisateurs/{id}', [App\Http\Controllers\UtilisateurController::class, 'show']);
// Appelle le controleur qui effacera l'utilisateur mis en paramètre
Route::delete('/utilisateurs/{id}', [App\Http\Controllers\UtilisateurController::class, 'destroy']);
// Appelle le controleur qui mettra à jour l'utilisateur mis en paramètre
Route::put('/utilisateurs/{id}', [App\Http\Controllers\UtilisateurController::class, 'update']);
// Appelle le controleur qui ajoutera un nouvel utilisateur
Route::post('/utilisateurs', [App\Http\Controllers\UtilisateurController::class, 'store']);

// ROUTE DE LA TABLE DES EVENEMENTS
// Appelle le controleur qui montre la liste des utilisateurs
Route::get('/evenements', [App\Http\Controllers\EvenementController::class, 'index']);
// Appelle le controleur qui montre l'utilisateur mis en paramètre
Route::get('/evenements/{id}', [App\Http\Controllers\EvenementController::class, 'show']);
// Appelle le controleur qui effacera l'utilisateur mis en paramètre
Route::delete('/evenements/{id}', [App\Http\Controllers\EvenementController::class, 'destroy']);
// Appelle le controleur qui mettra à jour l'utilisateur mis en paramètre
Route::put('/evenements/{id}', [App\Http\Controllers\EvenementController::class, 'update']);
// Appelle le controleur qui ajoutera un nouvel utilisateur
Route::post('/evenements', [App\Http\Controllers\EvenementController::class, 'store']);
