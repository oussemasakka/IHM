<?php

namespace App\Http\Controllers;



use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    
    public function index()
    {
        $reservations = Reservation::with(['user', 'chambre'])->get(); 

        return view('Admin.reservation.index', compact('reservations'));
    }

    public function mesResevation()
    {
        // Récupérer les réservations de l'utilisateur authentifié uniquement
        $reservations = Reservation::with(['user', 'chambre'])
            ->where('user_id', Auth::id())  // Filtrer par l'ID de l'utilisateur authentifié
            ->get(); 
    
        return view('Admin.reservation.index', compact('reservations'));
    }
    public function create() {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'room' => 'required',
        ]);
   
        // Pour chaque jour entre checkin et checkout, créer une réservation
        $start = Carbon::parse($request->checkin);
        $end = Carbon::parse($request->checkout);
    
        for ($date = $start; $date->lt($end); $date->addDay()) {
            \App\Models\Reservation::create([
                'user_id' => auth()->id(),
                'chambre_id' => $request->room,
                'date' => $date->toDateString(),
                'status' => 'en attente',
            ]);
        }
    
        return back()->with('success', 'Réservation effectuée avec succès');
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
