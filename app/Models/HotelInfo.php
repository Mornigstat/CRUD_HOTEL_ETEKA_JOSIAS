<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelInfo extends Model
{
    use HasFactory;
      protected $table = 'hotel_info';
    protected $fillable = [
          'nom_hotel',
        'description_hotel',
        'nom_chambre',
        'prix',
        'nombre_lits',
        'max_adultes',
        'max_enfants',
        'statut',


    ];
      
}
