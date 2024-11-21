<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NightBuddy</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="icon" href="img/iconweb.ico" type="image/x-icon"> <!-- Lien vers l'icône -->
</head>
<!-- resources/views/evenements.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription à un Événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Inscription à un événement</h1>

    <!-- Liste des événements -->
    <div class="list-group">
        @foreach($evenements as $evenement)
            <div class="list-group-item">
                <h5>{{ $evenement->eve_nom }}</h5>
                <p>Date : {{ $evenement->eve_date }}</p>
                <p>Lieu : {{ $evenement->eve_lieu }}</p>
                <p>Thème : {{ $evenement->eve_theme_musique }}</p>

                <!-- Formulaire d'inscription -->
                <form action="{{ route('participerevenement.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="par_eve_id" value="{{ $evenement->eve_id }}">

                    <!-- Informations utilisateur -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <!-- Choisir si c'est un conducteur -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="is_conducteur" name="is_conducteur">
                        <label class="form-check-label" for="is_conducteur">Je suis conducteur</label>
                    </div>

                    <!-- Liste des utilisateurs (affiché en décalé) -->
                    <h5>Utilisateurs inscrits :</h5>
                    @foreach($utilisateurs as $utilisateur)
                        <div class="list-group" style="margin-left: 20px;">
                            <div class="list-group-item">
                                <strong>{{ $utilisateur->uti_nom }} ({{ $utilisateur->uti_email }})</strong>
                                <p>Rôle : {{ $utilisateur->pivot->role }}</p>
                                @if($utilisateur->pivot->role === 'conducteur')
                                    <span class="badge bg-primary">Conducteur</span>
                                @else
                                    <span class="badge bg-secondary">Passager</span>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <!-- Bouton d'inscription -->
                    <button type="submit" class="btn btn-primary mt-3">S'inscrire</button>
                </form>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</html>
