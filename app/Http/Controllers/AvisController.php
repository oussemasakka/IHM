<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvisController extends Controller
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
        $avis = Avis::all();
        return view('Admin.avis.index', compact('avis'));
    }

    public function create() {
        return view('avis.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'nombreEtoile' => 'required|integer|min:1|max:5',
            'commentaire' => 'nullable|string'
        ]);
        Avis::create($data);
        return redirect()->route('avis.index');
    }

    public function show(Avis $avis) {
        return view('avis.show', compact('avis'));
    }

    public function edit(Avis $avis) {
        return view('Admin.avis.edit', compact('avis'));
    }

    public function update(Request $request, Avis $avis) {
        $data = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'nombreEtoile' => 'required|integer|min:1|max:5',
            'commentaire' => 'nullable|string'
        ]);
        $avis->update($data);
        return redirect()->route('avis.index');
    }

    public function destroy(Avis $avis) {
        $avis->delete();
        return redirect()->route('avis.index');
    }
}
