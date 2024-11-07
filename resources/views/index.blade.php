<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy - Inscription</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Inscription NightBuddy</h2>
        <form action="{{ route('liste') }}" method="post">
            @csrf
            <div class="form-section">
                <h3>Informations personnelles</h3>
                <label for="nom" autofocus>Nom :</label>
                <input type="text" id="nom" name="txt-nom" required>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="txt-prenom" required>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="txt-adresse" placeholder="Rue de la ..." required>

                <label for="Tel">Téléphone :</label>
                <input type="text" id="Tel" name="txt-Tel" placeholder="079 000 00 00" required>

                <label for="conducteur">Conducteur</label>
                <input type="checkbox" id="conducteur" name="chk-conducteur">
            </div>
            <hr>
            <h2>Créer un compte</h2>
            <label for="Email">E-mail :</label>
            <input type="email" id="Email" name="txt-email" placeholder="exemple@ex.gl" required>

            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="txt-mdp" required>
            <hr>
            <button type="submit" class="form-button" name="btn-envoyer" value="envoi">Envoyer</button>
        </form>
    </div>
</body>
</html>
