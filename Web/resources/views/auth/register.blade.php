<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy - Inscription</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
@include('components.header')
    <div class="container">
        <h2>Inscription NightBuddy</h2>

        <form action="{{route('users.store')}}" method="post">
            @csrf {{--générère un token--}}
            <div class="form-section">
                <h3>Informations personnelles</h3>
                <label for="nom" autofocus                                                                                                                                                                                                                                                                                            >Nom :</label>
                <input type="text" id="nom" name="name" autofocus>
            </div>

            <hr>

            <h2>Créer un compte</h2>
            <label for="Email">E-mail :</label>

            <input type="email" id="Email" name="email" placeholder="exemple@ex.gl">

            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="password" placeholder="Mots de passe">
            <label for="mdpCheck">Confirmer votre mot de passe</label>
            <input type="password" id="mdpCheck" name="" placeholder="Mots de passe">

                <HR>

            <button type="submit" class="form-button" name="btn-envoyer" value="envoi">Envoyer</button>
        </form>
    </div>
    <script src="{{asset('main.js')}}"></script>
</body>
</html>
