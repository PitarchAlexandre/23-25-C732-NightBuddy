<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utilisateur extends Model
{
    use HasFactory;

    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class, 'participer_evenement', 'par_uti_id', 'eve_id');
    }
}

