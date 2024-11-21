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

// Route formulaire utilisateur
Route::get('/frm-inscription', function () {
    return view('index');
})->name('index');
// Appelle le controleur qui ajoutera un nouvel utilisateur
Route::post('/utilisateurs', [App\Http\Controllers\UtilisateurController::class, 'store'])->name('utilisateurs.store')  ;

// Route formulaire évènement
Route::get('/ajoutevenement', function () {
    return view('ajoutevenement');
})->name('ajoutevenement');
Route::post('/evenements', [App\Http\Controllers\EvenementController::class, 'store'])->name('evenements.store')  ;


// Route pour afficher la page des événements
Route::get('/evenements', function () {
    // Récupérer tous les événements
    $evenements = \App\Models\Evenement::all();
    // Récupérer tous les utilisateurs (ou vous pouvez appliquer des filtres si nécessaire)
    $utilisateurs = \App\Models\Utilisateur::all();
    return view('evenements', compact('evenements', 'utilisateurs'));
});

Route::post('/participerevenement', [App\Http\Controllers\Participer_EvenementController::class, 'store'])->name('participerevenement.store');

/*
Route::post('/evenement', function (Request $request) {
    dd("envoi frm");
})->name('store-evenement');
*/




Route::get('/liste', function () {
    return view('listeevenement');
})->name('liste');


Route::get('/utilisateurs', function () {

    $utilisateur = new \App\Models\Utilisateur();
    $utilisateur->uti_nom = 'Renard';
    $utilisateur->uti_prenom = 'Marc';
    $utilisateur->uti_email = 'marc.renard@exemple.com';
    $utilisateur->uti_mdp = bcrypt('marcpassword852');
    $utilisateur->uti_role = true;
    $utilisateur->uti_adresse = '19 Rue de Rennes, 75006 Paris';
    $utilisateur->save();

    return $utilisateur;
});

Route::get('/participer-evenements', function () {
    //$participationEvent->
});
