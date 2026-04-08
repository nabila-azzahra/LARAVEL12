<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'stadium_id',
        'date',
        'time',
        'price',
    ];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
}
