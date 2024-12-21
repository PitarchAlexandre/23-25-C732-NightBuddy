<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Événement</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" href="img/iconweb.ico" type="image/x-icon"> <!-- Lien vers l'icône -->

</head>
<body>
@include('components.header')
<!-- Formulaire de création d'événement -->
<div class="container">

    <form action="{{ route('event.store') }}" method="post">
        @csrf {{-- Génère un token CSRF pour protéger le formulaire --}}
        <div class="form-section">
            <h2>Créer un Événement</h2>
            <h3>Informations de l'événement</h3>

            <label for="name">Nom de l'événement :</label>
            <input type="text" id="name" name="name" required placeholder="Titre de l'événement"/>

            <label for="date">Date :</label>
            <input type="date" id="date" name="date" rows="4" placeholder="Décrivez l'événement..."></input>

            <label for="location">Lieu :</label>
            <input type="text" id="location" name="location" required placeholder="Lieu de l'événement"/>

            <label for="theme_music">Musique :</label>
            <input type="text" id="theme_music" name="theme_music" required placeholder="Thème musicale de l'événement"/>

        </div>
        <HR>
        <button type="submit" class="form-button">Créer l'Événement</button>
    </form>
</div>

<footer>
    <hr>
    <!-- Partie avec le CopyRight -->
    <div class="footer-credential">
        &copy; 2024 NightBuddy. Tous droits résérvées.
    </div>
</footer>
<!-- Lien avec le JS -->
<script src="js/main.js"></script>
</body>
</html>
