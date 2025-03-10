<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'color', 'slogan', 'capacity', 'foundation'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_crews')->withPivot('confirmed');
    }
}
