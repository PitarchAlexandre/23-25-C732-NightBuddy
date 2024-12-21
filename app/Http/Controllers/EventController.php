<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Afficher la liste de tous les événements.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events);
    }

    /**
     * Afficher un événement spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    /**
     * Créer un nouvel événement.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataEvent = new \App\Models\Event();
        $dataEvent->id = $request->id;
        $dataEvent->name = $request->name;
        $dataEvent->date = $request->date;
        $dataEvent->location = $request->location;
        $dataEvent->theme_music = $request->theme_music;
        $dataEvent->created_at = $request->created_at;
        $dataEvent->updated_at = $request->updated_at;
        $dataEvent->save();
        return $dataEvent;
    }

    /**
     * Mettre à jour un événement spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'theme_music' => 'nullable|string|max:255',
        ]);

        // Mettre à jour les champs avec les valeurs validées, si elles existent
        $event->update(array_filter($validated));  // array_filter enlève les clés avec valeur null

        return response()->json($event);  // Retourner l'événement mis à jour
    }

    /**
     * Supprimer un événement spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Supprimer l'événement
        $event->delete();

        return response()->json(['message' => 'Événement supprimé avec succès.'], 200);
    }
    /**
     * Montrer les utilisateur participant à chaque évènement ainsi
     * les conducteurs et leur passager respectifs
     *
     * @return \Illuminate\Http\Response
     */
    public function eventPeople()
    {
        // Chargement des événements avec leurs covoiturages, conducteurs, et passagers associés
        $events = Event::with('carpools.driver', 'carpools.carpool_user.user')->get();

        // Préparer les résultats
        $result = $events->map(function ($event) {
            // Récupérer les informations de l'événement
            $eventData = [
                'event_name' => $event->name,
                'event_date' => $event->date,
                'event_location' => $event->location,
                'event_theme_music' => $event->theme_music,
                'drivers' => []
            ];

            // Récupérer les conducteurs et passagers associés à chaque covoiturage
            foreach ($event->carpools as $carpool) {
                // Ajouter le conducteur
                $driverData = [
                    'driver_name' => $carpool->driver->name,
                    'passengers' => []
                ];

                // Ajouter les passagers associés au conducteur
                foreach ($carpool->carpool_user as $carpoolUser) {
                    $driverData['passengers'][] = [
                        'passenger_name' => $carpoolUser->user->name
                    ];
                }

                // Ajouter le conducteur et ses passagers dans le tableau des conducteurs de l'événement
                $eventData['drivers'][] = $driverData;
            }

            return $eventData;
        });

        return response()->json($result);
    }

    // Méthode pour obtenir les covoiturages liés à un événement
    public function getCarpoolsByEvent($eventId)
    {
        $event = Event::find($eventId);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $carpools = $event->carpools()->with('driver', 'passengers')->get();
        return response()->json($carpools);
    }

    // Méthode pour obtenir les covoiturages avec leurs passagers respectifs
    public function getCarpoolsWithPassengers($eventId)
    {
        $event = Event::find($eventId);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $carpools = $event->carpools()->with('driver', 'passengers')->get();
        return response()->json($carpools);
    }

}
