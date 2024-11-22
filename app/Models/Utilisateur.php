<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utilisateur extends Model
{
    use HasFactory;

    // Par défaut, laravel cherche "id" quand on lui met un id en paramètre mais comme nous l'avons nommé uti_id
    // il ne trouve pas l'id. Nous devons donc redéclaré primary key en tant que "uti_id".
    protected $primaryKey = 'uti_id';


    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class, 'participer_evenement', 'par_uti_id', 'eve_id');
    }
}

