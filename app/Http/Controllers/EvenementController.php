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
        $newEvenement->eve_nom = $request->eve_nom;
        $newEvenement->eve_date = $request->eve_date;
        $newEvenement->eve_lieu = $request->eve_lieu;
        $newEvenement->eve_theme_musique = $request->eve_theme_musique;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
