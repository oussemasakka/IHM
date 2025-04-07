<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;
    // Specify the table name (optional if it follows Laravel's naming convention)
    protected $table = 'hotels';

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'nombreEtoile',
        'adress',
        'prixmoyen',
        'agence_id',
        'image',
        'NomHotel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Tu peux aussi ajouter la relation avec les hôtels :
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
}
