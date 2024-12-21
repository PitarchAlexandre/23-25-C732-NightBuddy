<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Carpool;
use Illuminate\Http\Request;
use App\Models\Event;



class CarpoolController extends Controller
{
    /**
     * Afficher la liste des covoiturages pour un événement spécifique.
     *
     * @param  int  $eventId
     * @return \Illuminate\Http\Response
     */
    public function index($eventId)
    {
        $event = Event::findOrFail($eventId);
        $carpools = $event->carpools;  // Obtenez les covoiturages associés à cet événement
        return response()->json($carpools);
    }

    /**
     * Créer un covoiturage pour un événement spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $eventId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'max_seats' => 'required|integer|min:1',
        ]);

        $event = Event::findOrFail($validated['event_id']);

        $carpool = Carpool::create([
            'event_id' => $event->id,
            'driver_id' => auth()->id(),
            'max_seats' => $validated['max_seats'],
        ]);

        return $carpool;
    }




    /**
     * Afficher un covoiturage spécifique.
     *
     * @param  int  $carpoolId
     * @return \Illuminate\Http\Response
     */
    public function show($carpoolId)
    {
        $carpool = Carpool::findOrFail($carpoolId);
        return response()->json($carpool);
    }

    public function addPassenger(Request $request, Carpool $carpool)
    {
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour vous inscrire.');
        }

        if ($carpool->passengers->contains($user)) {
            return redirect()->back()->with('info', 'Vous êtes déjà inscrit à ce covoiturage.');
        }

        if ($carpool->passengers->count() >= $carpool->max_seats) {
            return redirect()->back()->with('error', 'Ce covoiturage est complet.');
        }

        $carpool->passengers()->attach($user->id);

        return redirect()->back()->with('success', 'Inscription réussie au covoiturage.');
    }
}
