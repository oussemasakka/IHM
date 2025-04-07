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
}
