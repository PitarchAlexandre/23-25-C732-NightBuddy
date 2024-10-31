<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('img/iconweb.ico') }}" type="image/x-icon"> <!-- Lien vers l'icône -->
</head>
<body>
    <!-- Zone de texte pour le formulaire de demande de devis -->
    <div class="container">
        <h2>Inscription NightBuddy</h2>
        <form action="{{ route('nom_de_la_route') }}" method="post">
            @csrf <!-- Token CSRF pour la sécurité -->
            <div class="form-section">
                <h3>Informations personnelles</h3>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="txt-nom" autofocus>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="txt-prenom">

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="txt-adresse" placeholder="Rue de la ...">

                <label for="conducteur">Conducteur</label>
                <input type="checkbox" id="conducteur" name="chk-conducteur">
            </div>
            <hr>
            <h2>Crée un compte</h2>
            <label for="Email">E-mail :</label>
            <input type="text" id="Email" name="txt-email" placeholder="exemple@ex.gl">

            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="txt-mdp" placeholder="Mot de passe">
            <hr>
            <button type="submit" class="form-button" name="btn-envoyer" value="envoi">Envoyer</button>
        </form>
    </div>

    <footer>
        <hr>
        <!-- Partie avec le CopyRight -->
        <div class="footer-credential">
            &copy; 2024 NightBuddy. Tous droits réservés.
        </div>
    </footer>
    <!-- Lien avec le JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
