<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'description',
        'injury_prevention',
    ];

    public function muscleGroups()
    {
        return $this->belongsToMany(MuscleGroup::class);
    }
}
