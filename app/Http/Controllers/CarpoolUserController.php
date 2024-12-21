<?php

namespace App\Http\Controllers;
use App\Models\Carpool;
use App\Models\CarpoolUser;
use App\Models\User;
use Illuminate\Http\Request;

class CarpoolUserController extends Controller
{
    /**
     * Inscrire un utilisateur à un covoiturage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $carpoolId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $carpoolId)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // L'utilisateur doit exister
        ]);

        // Récupérer le covoiturage
        $carpool = Carpool::findOrFail($carpoolId);

        // Vérifier si l'utilisateur qui essaie de s'inscrire est déjà le conducteur
        if ($carpool->driver_id == $validated['user_id']) {
            return response()->json(['error' => 'Vous êtes déjà le conducteur de ce covoiturage.'], 400);
        }

        // Vérifier si le covoiturage a encore de la place
        $passengerCount = CarpoolUser::where('carpool_id', $carpoolId)->count();
        if ($passengerCount >= $carpool->max_seats) {
            return response()->json(['error' => 'Il n\'y a plus de place disponible dans ce covoiturage.'], 400);
        }

        // Ajouter l'utilisateur comme passager
        CarpoolUser::create([
            'carpool_id' => $carpoolId,
            'user_id' => $validated['user_id'],
        ]);

        return response()->json(['message' => 'Utilisateur ajouté au covoiturage en tant que passager.'], 201);
    }
    /**
     * Désinscrire un utilisateur d'un covoiturage.
     */
    public function destroy(Request $request, $carpoolId)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $carpoolUser = CarpoolUser::where('carpool_id', $carpoolId)
            ->where('user_id', $validated['user_id'])
            ->first();

        if (!$carpoolUser) {
            return response()->json(['error' => 'Cet utilisateur n\'est pas inscrit à ce covoiturage.'], 400);
        }

        $carpoolUser->delete();

        return response()->json(['message' => 'Utilisateur désinscrit du covoiturage.'], 200);
    }
}
