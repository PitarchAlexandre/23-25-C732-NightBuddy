<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy - Liste des événements</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Événements disponibles</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom fête</th>
                    <th>Lieu</th>
                    <th>Propriétaire</th>
                    <th>Privé</th>
                </tr>
            </thead>
            <!--<tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->id }}</td>
                        <td>{{ $evenement->nom }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>{{ $evenement->proprietaire }}</td>
                        <td>{{ $evenement->prive ? 'Oui' : 'Non' }}</td>
                    </tr>
                @endforeach
            </tbody>-->
        </table>

        <div class="button-container">
            <a href="{{route('add-evenement') }}" class="btn">Créer un nouvel événement</a>
        </div>
    </div>
</body>
</html>
