<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participer_Evenement extends Model
{
    use HasFactory;

    public function utilisateur(): HasMany
    {
        return $this->hasOne('uti_id');
    }
}
