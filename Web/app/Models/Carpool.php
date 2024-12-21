<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carpool extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'driver_id',
        'max_seats',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Relation avec la table carpool_user (passagers).
     */
    public function carpool_user()
    {
        return $this->hasMany(CarpoolUser::class, 'carpool_id');
    }

    /**
     * Relation avec le conducteur (utilisateur).
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    /**
     * Relation avec les passagers via la table pivot carpool_user.
     */
    public function passengers()
    {
        return $this->belongsToMany(User::class, 'carpool_user', 'carpool_id', 'user_id')
            ->withTimestamps();
    }


}
