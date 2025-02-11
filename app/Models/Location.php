<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['x_coordinate', 'y_coordinate', 'crew_id', 'year'];

    public function crew()
    {
        return $this->belongsTo(Crew::class);
    }
}
