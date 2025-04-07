<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function chambre() {
        return $this->belongsTo(Chambre::class);
    }
    
    public function avis() {
        return $this->hasOne(Avis::class);
    }
}
