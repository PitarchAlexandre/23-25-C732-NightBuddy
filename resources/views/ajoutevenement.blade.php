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
<!-- Formulaire de création d'événement -->
<div class="container">
    <h2>Créer un Événement</h2>
    <form action="{{ route('evenements.store') }}" method="post">
        @csrf {{-- Génère un token CSRF pour protéger le formulaire --}}
        <div class="form-section">
            <h3>Informations de l'événement</h3>

            <label for="nomEvenement">Nom de l'événement :</label>
            <input type="text" id="nomEvenement" name="txt_nom_evenement" required placeholder="Titre de l'événement"/>

            <label for="date_evenement">Date :</label>
            <input type="datetime-local" id="date_evenement" name="date_evenement" rows="4" placeholder="Décrivez l'événement..."></input>

            <label for="lieuEvenement">Lieu :</label>
            <input type="text" id="lieuEvenement" name="txt_lieu_evenement" required placeholder="Lieu de l'événement"/>

            <label for="musiqueEvenement">Musique :</label>
            <input type="text" id="musiqueEvenement" name="txt_theme_musique_evenement" required placeholder="Thème musicale de l'événement"/>
        <!--
            <label for="type">Type de musique :</label>
            <select id="type" name="type" required>
                <option value="privé">Privé</option>
                <option value="public">Public</option>
            </select>
         -->
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
