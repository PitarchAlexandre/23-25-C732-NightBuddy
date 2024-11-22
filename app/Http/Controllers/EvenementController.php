<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeEvenements = \App\Models\Evenement::all();
        return $listeEvenements;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newEvenement = new \App\Models\Evenement();
        $newEvenement->eve_nom = $request->txt_nom_evenement;
        $newEvenement->eve_date = $request->date_evenement;
        $newEvenement->eve_lieu = $request->txt_lieu_evenement;
        $newEvenement->eve_theme_musique = $request->txt_theme_musique_evenement;
        $newEvenement->save();
        return $newEvenement;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evenement = \App\Models\Evenement::findOrFail($id);
        return $evenement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateEvenement = \App\Models\Evenement::findOrFail($id);
        $updateEvenement->eve_nom = $request->eve_nom;
        $updateEvenement->eve_date = $request->eve_date;
        $updateEvenement->eve_lieu = $request->eve_lieu;
        $updateEvenement->eve_theme_musique = $request->eve_theme_musique;
        $updateEvenement->update();
        return $updateEvenement;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $effacerEvenement = \App\Models\Evenement::findOrFail($id);
        $effacerEvenement->delete();
    }
}
