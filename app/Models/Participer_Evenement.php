<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participer_Evenement extends Model
{
    use HasFactory;

    // Laravel met par défaut la table au pluriel ('participer_evenementS'), donc il faut la renommer
    // au singulier puisque je l'ai nommée au singulier dans ma base de donnée
    protected $table = 'participer_evenement';
}
