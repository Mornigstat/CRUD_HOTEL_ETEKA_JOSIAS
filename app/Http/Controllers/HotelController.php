<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelInfo;

class HotelController extends Controller
{
    
    public function liste_hotel()
    
    {
        return view('hotel.liste');
    }

      public function ajouter_hotel()
    
    {
        return view('hotel.ajouter');
    }

    public function ajouter_hotel_traitement(Request $request)
{
        $request->valdate([
        'nom_hotel' => 'requiered',
        'description_hotel' => 'requiered',
        'nom_chambre' => 'requiered',
        'prix' => 'requiered',
        'nombre_lits' => 'requiered',
        'max_adultes' => 'requiered',
        'max_enfants' => 'requiered',
        'statut' => 'requiered',
        ]);
        $hotel = new Hotel();
        $hotel->nom_hotel = $request->nom_hotel;
        $hotel->description_hotel = $request->description_hotel;
        $hotel->nom_chambre = $request->nom_chambre;
        $hotel->prix = $request->prix;
        $hotel->nombre_lits = $request->nombre_lits;
        $hotel->max_adultes = $request->max_adultes;
        $hotel->max_enfants = $request->max_enfants;
        $hotel->statut = $request->statut;
        $hotel->save();

        return redirect ('/ajouter')->with('status', 'Validé.');

    }
    
    

}
