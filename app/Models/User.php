<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'email',
        'password',
        'role_id', // Relación con roles
    ];

    // Relación con el modelo Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    // Métodos para verificar roles
    public function isAdmin()
    {
        return $this->role_id === Role::ADMIN;
    }

    public function isUser()
    {
        return $this->role_id === Role::USER;
    }

    // Relación many-to-many con Crew
    public function crews()
    {
        return $this->belongsToMany(Crew::class, 'user_crews')
                    ->withPivot(['year', 'confirmed'])
                    ->withTimestamps();
    }

    // Relación many-to-many con Crew para membresías confirmadas
    public function confirmedCrews()
    {
        return $this->belongsToMany(Crew::class, 'user_crews')
                    ->withPivot(['year', 'confirmed'])
                    ->wherePivot('confirmed', true)
                    ->withTimestamps();
    }
}

