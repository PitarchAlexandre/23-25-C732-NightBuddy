<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Carpool;

class CarpoolUser extends Model
{
    use HasFactory;

    protected $table = 'carpool_user';  // Spécifie le nom de la table pivot

    protected $fillable = [
        'carpool_id',
        'user_id',
    ];

    protected $casts = [
        'is_driver' => 'boolean',  // Assurez-vous que 'is_driver' est traité comme un booléen
    ];

    /**
     * Relation avec le covoiturage.
     */
    public function carpool()
    {
        return $this->belongsTo(Carpool::class, 'carpool_id');
    }

    /**
     * Relation avec l'utilisateur (passager).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
