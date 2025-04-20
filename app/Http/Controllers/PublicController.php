<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Chambre;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        return view('Client.welcome', compact('hotels'));
    }
    public function hotels()
    {
        $hotels = Hotel::all();
        return view('Client.Hotels', compact('hotels'));    
    }
    public function details($id)
    {
        $hotel = Hotel::find($id);
        return view('Client.detailsHotels', compact('hotel'));           
    }
    public function checkout($id)
    {
        $chambres = Chambre::where('hotel_id', $id)->get();
        $hotel = Hotel::find($id);
        return view('Client.checkout', compact('hotel','chambres'));   
    }
    public function contact()
    {
        return view('Client.contact');
    }
}
