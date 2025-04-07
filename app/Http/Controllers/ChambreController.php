<?php

namespace App\Http\Controllers;

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
        return view('Admin.chambres.index', compact('chambres'));
    }

    public function create() {
        return view('Admin.chambres.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nbLit' => 'required|integer',
            'vue' => 'required|string',
            'hotel_id' => 'required|exists:hotels,id'
        ]);
        Chambre::create($data);
        return redirect()->route('chambres.index');
    }

    public function show(Chambre $chambre) {
        return view('Admin.chambres.show', compact('chambre'));
    }

    public function edit(Chambre $chambre) {
        return view('Admin.chambres.edit', compact('chambre'));
    }

    public function update(Request $request, Chambre $chambre) {
        $data = $request->validate([
            'nbLit' => 'required|integer',
            'vue' => 'required|string',
            'hotel_id' => 'required|exists:hotels,id'
        ]);
        $chambre->update($data);
        return redirect()->route('chambres.index');
    }

    public function destroy(Chambre $chambre) {
        $chambre->delete();
        return redirect()->route('chambres.index');
    }
}

