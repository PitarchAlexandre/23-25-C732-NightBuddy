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
@include('components.header')
<body>
    <main>
        <h1>Bonjour {{ Auth::user()->name }}, bienvenue dans Night Buddy !</h1>

        <p> Tu peux maintenant t'inscrire à des événements en tant que conducteur pour amener des gens en covoiturage.</p>
        <p> Ou profiter pour être covoituré et rendre tes trajets plus agréables !</p>

        <h2><a href="/carpooling">Consulter les événements et covoiturages</a></h2>
    </main>
</body>
