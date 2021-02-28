<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Planet extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'planet',
        'moons',
        'diameter',
        'galaxy_id'
    ];

    public function galaxy()
    {
        return $this->belongsTo(Galaxy::class);
    }
}
