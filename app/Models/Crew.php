<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'color', 'slogan', 'foundation'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_crews')->withPivot('year', 'confirmed')->withTimestamps();
    }
}
