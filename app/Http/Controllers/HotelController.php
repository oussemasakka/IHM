<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Agence;
use Illuminate\Http\Request;
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
        $request->validate([
            'NomHotel' => 'required|string|max:255',
            'nombreEtoile' => 'required|integer',
            'adress' => 'required|string|max:255',
            'prixmoyen' => 'required|numeric',
            'agence_id' => 'required|exists:agences,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
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
    
        return redirect()->route('hotels.index');
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
