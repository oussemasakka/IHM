<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
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
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create() {
        return view('reservations.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'chambre_id' => 'required|exists:chambres,id',
            'date' => 'required|date',
            'status' => 'required|string'
        ]);
        Reservation::create($data);
        return redirect()->route('reservations.index');
    }

    public function show(Reservation $reservation) {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation) {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation) {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'chambre_id' => 'required|exists:chambres,id',
            'date' => 'required|date',
            'status' => 'required|string'
        ]);
        $reservation->update($data);
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation) {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
