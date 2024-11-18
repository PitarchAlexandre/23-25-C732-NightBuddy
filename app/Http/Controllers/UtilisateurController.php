<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listeUtilisateurs = \App\Models\Utilisateur::all();
        return $listeUtilisateurs;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $newUtilisateur = new \App\Models\Utilisateur();
        $newUtilisateur->uti_nom = $request->txt_nom;
        $newUtilisateur->uti_prenom = $request->txt_prenom;
        $newUtilisateur->uti_email = $request->txt_email;
        $newUtilisateur->uti_mdp = $request->txt_mdp;// Chiffrement du mot de passe bcrypt($validated['txt_mdp']),
        $newUtilisateur->uti_role = $request->chk_conducteur ? true : false;
        $newUtilisateur->uti_adresse = $request->txt_adresse;
        $newUtilisateur->uti_tel = $request->txt_tel;
        $newUtilisateur->save();
        return $newUtilisateur;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $utilisateur = \App\Models\Utilisateur::findOrFail($id);
        return $utilisateur;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateUtilisateur = \App\Models\Utilisateur::findOrFail($id);
        $updateUtilisateur->uti_nom = $request->uti_nom;
        $updateUtilisateur->uti_prenom = $request->uti_prenom;
        $updateUtilisateur->uti_email = $request->uti_email;
        $updateUtilisateur->uti_mdp = $request->uti_mdp;
        $updateUtilisateur->uti_role = $request->uti_role;
        $updateUtilisateur->uti_adresse = $request->uti_adresse;
        $updateUtilisateur->uti_tel = $request->uti_tel;
        $updateUtilisateur->update();
        return $updateUtilisateur;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $effacerUtilisateur = \App\Models\Utilisateur::findOrFail($id);
        $effacerUtilisateur->delete();
    }
}
