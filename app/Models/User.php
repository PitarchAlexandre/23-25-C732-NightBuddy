<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relation avec les covoiturages (conducteur ou passager)
    public function carpools()
    {
        return $this->belongsToMany(Carpool::class, 'carpool_user')
            ->withPivot('is_driver')  // Inclure le rôle (conducteur ou passager)
            ->withTimestamps();
    }

    // Vérifie si l'utilisateur est conducteur dans un covoiturage
    public function isDriverInCarpool($carpoolId)
    {
        return $this->carpools()->wherePivot('carpool_id', $carpoolId)->wherePivot('is_driver', true)->exists();
    }

    // Vérifie si l'utilisateur est passager dans un covoiturage
    public function isPassengerInCarpool($carpoolId)
    {
        return $this->carpools()->wherePivot('carpool_id', $carpoolId)->wherePivot('is_driver', false)->exists();
    }
}
