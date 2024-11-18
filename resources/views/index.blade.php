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
        <!-- Zone de texte pour le formulaire de demande de devis-->
    <div class="container">
        <h2>Inscription NightBuddy</h2>
        <form action="{{route('utilisateurs.store')}}" method="post">
            @csrf {{--générère un token--}}
            <div class="form-section">
                <h3>Informations personnelles</h3>
                <label for="nom" autofocus                                                                                                                                                                                                                                                                                            >Nom :</label>
                <input type="text" id="nom" name="txt_nom" autofocus>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="txt_prenom">

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="txt_adresse" placeholder="Rue de la ...">

                <label for="Tel">Téléphone :</label>
                <input type="text" id="Tel" name="txt_tel" placeholder="079 000 00 00">

                <label for="conducteur">Conducteur</label>
                <input type="checkbox" id="conducteur" name="chk_conducteur">

            </div>
                    <HR>
            <h2>Crée un compte</h2>
            <label for="Email">E-mail :</label>
            <input type="text" id="Email" name="txt_email" placeholder="exemple@ex.gl">

            <label for="mdp">Mots de passe</label>
            <input type="text" id="mdp" name="txt_mdp" placeholder="Mots de passe">
                <HR>
            <button type="submit" class="form-button" name="btn-envoyer" value="envoi">Envoyer</button>
        </form>
    </div>

        <footer>
            <hr>
            <!-- Partie avec le CopyRight -->
            <div class="footer-credential">
                &copy; 2024 NightBuddy. Tous droits résérvées.
            </div>
        </footer>
    <!--Lien avec le JS -->
    <script src="js/main.js"></script>
    </body>
</html>

