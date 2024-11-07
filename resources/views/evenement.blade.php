<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" href="img/iconweb.ico" type="image/x-icon"> <!-- Lien vers l'icône -->
</head>
    <body>
        <div class="container">
            <h2>Formulaire NightBuddy</h2>
            <form action="" method="post">
                <div class="form-section">
                    <h3>Informations sur l'événement</h3>

                    <!-- Champ Nom -->
                    <label for="nom" autofocus>Nom :</label>
                    <input type="text" id="nom" name="txt-nom" autofocus>

                    <!-- Champ Date -->
                    <label for="date">Date de l'événement :</label>
                    <input type="date" id="date" name="txt-date">
                    <hr>
                    <!-- Champ Lieu -->
                    <label for="lieu">Lieu :</label>
                    <input type="text" id="lieu" name="txt-lieu" placeholder="Exemple : Salle XYZ, Paris">

                    <!-- Champ Musique -->
                    <label for="musique">Type de musique :</label>
                    <input type="text" id="musique" name="txt-musique" placeholder="Exemple : Rock, Pop, Électro">

                </div>

                <button type="submit" class="form-button" name="btn-envoyer" value="envoi">Envoyer</button>
            </form>

            <!-- Bouton pour accéder à l'index -->
            <div class="button-container">
                <a href="{{ route('liste') }}" class="btn">Retour à la liste</a> <!-- Redirection vers la route 'index' -->
            </div>
        </div>

        <footer>
            <hr>
            <!-- Partie avec le CopyRight -->
            <div class="footer-credential">
                &copy; 2024 NightBuddy. Tous droits réservés.
            </div>
        </footer>

    <!-- Lien avec le JS -->
    <script src="{{ asset('js/main.js') }}"></script> <!-- Utilisation de asset() pour inclure main.js -->
    </body>
</html>
