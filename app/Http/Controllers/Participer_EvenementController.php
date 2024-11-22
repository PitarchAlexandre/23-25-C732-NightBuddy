<?php

    namespace App\Http\Controllers;

    use App\Models\Participer_Evenement;
    use Illuminate\Http\Request;

    class Participer_EvenementController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $tableAssociativesPartEvebt = \App\Models\Participer_Evenement::all();
            return $tableAssociativesPartEvebt;
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            // Créer une nouvelle instance du modèle Participer_Evenement
            $participation = new Participer_Evenement();
            $participation->par_uti_id = $request->par_uti_id; // ID de l'utilisateur
            $participation->par_eve_id = $request->par_eve_id; // ID de l'événement
            $participation->save();
            return $participation;
        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
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
            //
        }
    }
