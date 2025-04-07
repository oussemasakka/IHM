<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    use HasFactory;
      // Specify the table name (optional if it follows Laravel's naming convention)
      protected $table = 'agences';

      // Define the fillable properties to allow mass assignment
      protected $fillable = [
          'NomAgence',
          'adress',
          'email',
          'siteweb',
          'user_id',
      ];
  
      // Define the relationship with the User model (a many-to-one relationship)
      public function user()
      {
          return $this->belongsTo(User::class); // Each agency belongs to a user
      }
}
