<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCrew extends Model
{
    use HasFactory;

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con la crew
    public function crew()
    {
        return $this->belongsTo(Crew::class);
    }
}
