<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Evenement extends Model
{
    use HasFactory;


    // Par défaut, laravel cherche "id" quand on lui met un id en paramètre mais comme nous l'avons nommé eve_id
    // il ne trouve pas l'id. Nous devons donc redéclaré primary key en tant que "eve_id".
    protected $primaryKey = 'eve_id';

    public function utilisateurs(): BelongsToMany
    {
        return $this->belongsToMany(Utilisateur::class, 'participer_evenement', 'eve_id', 'par_uti_id');
    }

}
