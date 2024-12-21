<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'date',
        'location',
        'theme_music',
    ];

    /**
     * Récupère les covoiturages associés à l'événement.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carpools(): HasMany
    {
        return $this->hasMany(Carpool::class);
    }

}
