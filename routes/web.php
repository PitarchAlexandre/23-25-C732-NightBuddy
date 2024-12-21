<?php

use App\Http\Controllers\CarpoolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will be assigned
| to the "web" middleware group. Make something great!
|
*/

/* FORTIFY
    Doc : https://laravel.com/docs/11.x/fortify
    Vidéo : https://www.youtube.com/watch?v=tEl06GwB6Zw
*/

// Route de la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour afficher le formulaire d'inscription
Route::get('/register', function () {
    return view('auth/register');
})->name('register');

// Route pour enregistrer un utilisateur après l'inscription
Route::post('users', [UserController::class, 'store'])->name('users.store');

// Route pour afficher le formulaire de connexion
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

// Route pour afficher le formulaire de création d'événement
Route::get('/events', function () {
    return view('addevent');
})->name('events.store');

// Route pour enregistrer un événement
Route::post('/events', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');

// Route pour afficher les événements et les covoiturages respectifs
Route::get('/carpooling', function () {
    $events = App\Models\Event::with('carpools.driver', 'carpools.passengers')->get();
    $carpools = App\Models\Carpool::with('driver', 'passengers')->get();
    $carpoolUsers = App\Models\CarpoolUser::all();
    $users = App\Models\User::all();

    return view('covoiturage', compact('events', 'carpools', 'carpoolUsers', 'users'));
})->name('covoiturage');

// Route pour inscrire un utilisateur à un covoiturage à un événement en tant que conducteur
Route::post('carpools', [CarpoolController::class, 'store'])->name('carpools.store');

// Route pour inscrire un utilisateur à un covoiturage en tant que passager
Route::post('/carpool-users/{carpoolId}', [App\Http\Controllers\CarpoolUserController::class, 'store'])->name('carpool-users.store');

// Route pour supprimer un utilisateur d'un covoiturage
Route::delete('/carpool-users/{carpoolId}', [App\Http\Controllers\CarpoolUserController::class, 'destroy'])->name('carpool-users.destroy');

// Route pour gérer les carpools liés à un événement spécifique
Route::post('events/{eventId}/carpools', [CarpoolController::class, 'store'])->name('carpools.store');

// Route permettant de créer un covoiturage
 Route::post('carpools/store', [CarpoolController::class, 'store'])->name('carpools.store');

// Route pour la page d'accueil (optionnelle, à conserver ou à supprimer selon vos besoins)
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route pour afficher la documentation API
Route::get('/api-documentation', function () {
    return view('api-doc'); // Assurez-vous que le nom du fichier est `api/documentation.blade.php`
});
