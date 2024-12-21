<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements et Covoiturages</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<!-- Inclure le header -->
@include('components.header')

<div class="container mt-5">
    <h1 class="page-title">Événements et Covoiturages</h1>


    <!-- Formulaire pour ajouter un covoiturage -->
    <div class="form-section">
        <h2>Créer un Covoiturage</h2>
        <form action="{{ route('carpools.store', ['eventId' => old('event_id')]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="event_id">Événement</label>
                <select id="event_id" name="event_id">
                    @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->name }} - {{ $event->date }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="max_seats">Nombre de places maximales</label>
                <input type="number" id="max_seats" name="max_seats" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer le covoiturage</button>
        </form>
    </div>

    <!-- Liste des covoiturages disponibles -->
    <h3>Covoiturages disponibles :</h3>
    @foreach($events as $event)
        <div class="event-card">
            <div class="card-header">
                <h2>{{ $event->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Date :</strong> {{ $event->date }}</p>
                <p><strong>Lieu :</strong> {{ $event->location }}</p>
                <p><strong>Thème :</strong> {{ $event->theme_music ?? 'Non précisé' }}</p>

                <h3>Covoiturages :</h3>
                @forelse($event->carpools as $carpool)
                    <div class="carpool-card">
                        <h4>Conducteur : {{ $carpool->driver->name }}</h4>
                        <p><strong>Email :</strong> {{ $carpool->driver->email }}</p>
                        <p><strong>Places disponibles :</strong> {{ $carpool->max_seats - $carpool->passengers->count() }} / {{ $carpool->max_seats }}</p>

                        <h5>Passagers :</h5>
                        @if($carpool->passengers->isEmpty())
                            <p>Aucun passager pour ce covoiturage.</p>
                        @else
                            <ul>
                                @foreach($carpool->passengers as $passenger)
                                    <li>{{ $passenger->name }} - {{ $passenger->email }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <!-- Formulaires pour s'inscrire ou se désinscrire -->
                        @if(Auth::check())
                            @php
                                $isPassenger = $carpool->passengers->contains(auth()->user()->id);
                            @endphp

                            @if($isPassenger)
                                <form action="{{ route('carpool-users.destroy', $carpool->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="btn btn-danger">Se désinscrire</button>
                                </form>
                            @elseif($carpool->max_seats > $carpool->passengers->count())
                                <form action="{{ route('carpool-users.store', $carpool->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                                </form>
                            @else
                                <p>Covoiturage complet.</p>
                            @endif
                        @else
                            <p><a href="{{ route('login') }}" class="ancre-login"><strong>Connectez-vous</strong></a>
                                pour vous inscrire à ce covoiturage.</p>
                        @endif
                    </div>
                @empty
                    <p>Aucun covoiturage pour cet événement.</p>
                @endforelse
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
