<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
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
        $hotel = Hotel::find($id);
        return view('Client.checkout', compact('hotel'));   

    }
}
