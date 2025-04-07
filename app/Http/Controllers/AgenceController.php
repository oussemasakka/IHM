<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgenceController extends Controller
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
        $agences = Agence::all();
        return view('Admin.agences.index', compact('agences'));
    }

    public function create() {
        $users = User::all();
        return view('Admin.agences.create' , compact('users'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'adress' => 'required|string',
            'NomAgence'=> 'required|string',
            'email' => 'required|email',
            'siteweb' => 'required|string',
            'user_id'=> 'required'
        ]);
        Agence::create($data);
        return redirect()->route('agences.index');
    }

    public function show(Agence $agence) {
        return view('Admin.agences.show', compact('agence'));
    }

    public function edit(Agence $agence) {
        $users = User::all();
        return view('Admin.agences.edit', compact('agence','users'));
    }

    public function update(Request $request, Agence $agence) {
        $data = $request->validate([
            'adress' => 'required|string',
            'email' => 'required|email',
            'NomAgence'=> 'required|string',
            'siteweb' => 'required|string',
            'user_id'=> 'required'

        ]);
        $agence->update($data);
        return redirect()->route('agences.index');
    }

    public function destroy(Agence $agence) {
        $agence->delete();
        return redirect()->route('agences.index');
    }
}
