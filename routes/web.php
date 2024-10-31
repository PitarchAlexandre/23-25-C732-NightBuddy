<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/utilisateurs', function () {

    $utilisateur = new \App\Models\Utilisateur();
    $utilisateur->uti_nom = 'Renard';
    $utilisateur->uti_prenom = 'Julie';
    $utilisateur->uti_email = 'julie.renard@exemple.com';
    $utilisateur->uti_mdp = bcrypt('juliepassword852');
    $utilisateur->uti_role = true;
    $utilisateur->uti_adresse = '19 Rue de Rennes, 75006 Paris';
    $utilisateur->save();

    return $utilisateur;
});
