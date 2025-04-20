<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $fillable = [
        'hotel_id',
        'nbLit',
        'vue',
        'numero',
        'id',
    ];
}
