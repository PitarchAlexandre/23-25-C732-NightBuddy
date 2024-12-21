<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur Night Buddy !</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1f1f1f;
            padding: 20px;
            text-align: center;
        }

        main {
            margin-top: 100px;
            padding: 50px;
            background-color: #1f1f1f;
            color: #ffffff;
        }
        h1 {
            text-align: center;
            font-size: 62px;
        }

        h2 {
            color: #ff6f61;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            color: #ff6f61;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #c1c1c1;
        }
    </style>
</head>
<body>

<!-- Include Header -->
@include('components.header')

<main>
    <h1>Bienvenue sur Night Buddy!</h1>
    <p>
        Night Buddy est l'application de covoiturage dédiée aux événements. Que vous soyez conducteur ou passager, notre plateforme vous permet de trouver des solutions de covoiturage simples et pratiques.
    </p>

    <h2>Ce que vous pouvez faire avec Night Buddy :</h2>
    <p>
        - Conduire ou être passager : Inscrivez-vous pour rejoindre les trajets disponibles ou proposez votre propre trajet.<br>
        - Créer et promouvoir des événements : En tant qu'organisateur, centralisez et promouvez vos événements tout en facilitant le covoiturage avec vos participants.<br>
        - Faciliter le covoiturage : Night Buddy facilite la coordination et la promotion de trajets partagés pour rendre vos événements plus accessibles et durables.
    </p>

    <h2>API Night Buddy : Augmentez la portée du covoiturage !</h2>
    <p>
        Nous offrons une API complète qui permet aux organisateurs d'événements de promouvoir le covoiturage de manière transparente sur leurs sites web. En intégrant notre API, vous pouvez :
    </p>
    <p>
        - Intégrer le covoiturage à vos événements<br>
        - Favoriser une expérience utilisateur cohérente et fluide pour vos participants<br>
        - Améliorer la visibilité et la facilité d'accès aux trajets disponibles.
    </p>
    <p>
        Découvrez la documentation de notre API et comment l’intégrer sur votre site web en visitant <h2><a href="/api-documentation">la page  de documentation API Night Buddy</a></h2>
    </p>
</main>

<!-- Include Footer -->
<footer>
    <p>&copy; 2024 Night Buddy. Tous droits réservés.</p>
</footer>

</body>
</html>
