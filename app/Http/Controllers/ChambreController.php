<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChambreController extends Controller
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
        $chambres = Chambre::all();
      
        return view('Admin.chambre.index', compact('chambres'));
    }

    public function create() {
        $hotels = Hotel::all();

        return view('Admin.chambre.create',compact('hotels'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nbLit' => 'required|integer',
            'vue' => 'required|string',
            'hotel_id' => 'required|exists:hotels,id'
        ]);
        Chambre::create($data);
        return redirect()->route('chambre.index');
    }

    public function show( $chambre) {


        $chambres = Chambre::where('hotel_id', $chambre)->get();
     

        return view('Admin.chambre.index', compact('chambres'));
    }

    public function edit(Chambre $chambre) {
        return view('Admin.chambre.edit', compact('chambre'));
    }

    public function update(Request $request, Chambre $chambre) {
        $data = $request->validate([
            'nbLit' => 'required|integer',
            'vue' => 'required|string',
            'hotel_id' => 'required|exists:hotels,id'
        ]);
        $chambre->update($data);
        return redirect()->route('chambre.index');
    }

    public function destroy(Chambre $chambre) {
        $chambre->delete();
        return redirect()->route('chambre.index');
    }
}

