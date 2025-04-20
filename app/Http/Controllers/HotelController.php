<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Agence;
use App\Models\Chambre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $hotels = Hotel::all();
        return view('Admin.hotels.index', compact('hotels'));
    }

    public function create() {
        $agences = Agence::all();
        return view('Admin.hotels.create',compact('agences'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'NomHotel' => 'required|string|max:255',
            'nombreEtoile' => 'required|integer',
            'adress' => 'required|string|max:255',
            'prixmoyen' => 'required|numeric',
            'agence_id' => 'required|exists:agences,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            // Validation des chambres
            'numeroChambre.*' => 'required|string|max:255',
            'nbLit.*' => 'required|integer',
            'vue.*' => 'required|string|max:255',
        ]);
    
        // Début de la transaction pour garantir l'intégrité des données
        DB::beginTransaction();
    
        try {
            // Enregistrement de l'hôtel
            $hotel = new Hotel();
            $hotel->NomHotel = $request->NomHotel;
            $hotel->nombreEtoile = $request->nombreEtoile;
            $hotel->adress = $request->adress;
            $hotel->prixmoyen = $request->prixmoyen;
            $hotel->agence_id = $request->agence_id;
    
            // Traitement de l'image
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/hotels'), $imageName);
                $hotel->image = 'images/hotels/' . $imageName;
            }
    
            $hotel->save();
    
            // Enregistrement des chambres associées
            $numeroChambre = $request->input('numeroChambre');
            $nbLit = $request->input('nbLit');
            $vue = $request->input('vue');
    
            for ($i = 0; $i < count($numeroChambre); $i++) {
                Chambre::create([
                    'hotel_id' => $hotel->id,
                    'numero' => $numeroChambre[$i],  // Assurez-vous d'avoir un champ 'numero' dans la table chambres
                    'nbLit' => $nbLit[$i],
                    'vue' => $vue[$i],
                ]);
            }
    
            // Validation et confirmation de la transaction
            DB::commit();
    
            // Redirection vers la liste des hôtels avec un message de succès
            return redirect()->route('hotels.index')->with('success', 'Hôtel et chambres ajoutés avec succès.');
        } catch (\Exception $e) {

            // Si une erreur se produit, annuler la transaction et afficher l'erreur
            DB::rollback();
            return back()->with('error', 'Erreur lors de l\'ajout : ' . $e->getMessage());
        }
    }
    

    public function show(Hotel $hotel) {
        return view('Admin.hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel) {
        $hotel = Hotel::findOrFail($hotel->id);
        $agences = Agence::all();
        return view('Admin.hotels.edit', compact('hotel', 'agences'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NomHotel' => 'required|string|max:255',
            'nombreEtoile' => 'required|integer',
            'adress' => 'required|string|max:255',
            'prixmoyen' => 'required|numeric',
            'agence_id' => 'required|exists:agences,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $hotel = Hotel::findOrFail($id);
        $hotel->NomHotel = $request->NomHotel;
        $hotel->nombreEtoile = $request->nombreEtoile;
        $hotel->adress = $request->adress;
        $hotel->prixmoyen = $request->prixmoyen;
        $hotel->agence_id = $request->agence_id;
    
        // Traitement de l'image (si elle est présente)
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($hotel->image) {
                unlink(public_path($hotel->image));
            }
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/hotels'), $imageName);
            $hotel->image = 'images/hotels/' . $imageName;
        }
    
        $hotel->save();
    
        return redirect()->route('hotels.index');
    }
    
    public function destroy(Hotel $hotel) {
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
