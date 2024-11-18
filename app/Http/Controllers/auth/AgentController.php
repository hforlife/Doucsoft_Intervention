<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin/usage/user/add-age');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:agents,email',
            'address' => 'required|string',
            'number' => 'required|min:8',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);


        $agent->assignRole('agent');

        return redirect()->route('admin.users')->with('status', 'Ajout effectué avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $agent = Agent::find($id);
        return view('admin.usage.user.edit-age', compact('agent'));
    }

    public function update(Request $request, int $id)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:8|confirmed', // Le champ password peut être nul
        ]);

        // Rechercher l'admin dans la base de données
        $agent = Agent::findOrFail($id); // Assurez-vous d'utiliser le bon modèle

        // Mise à jour des champs
        $agent->name = $request->name;
        $agent->email = $request->email;

        // Si le mot de passe est fourni, on le hash et on le met à jour
        if ($request->filled('password')) {
            $agent->password = Hash::make($request->password); // Hash du mot de passe
        }

        // Enregistrement des modifications
        $agent->save();

        // Redirection avec un message de succès
        return redirect()->route('admin.users')->with('status', 'Modification effectuée avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $agents = Agent::find($id);
        $agents->delete();
        return redirect()->route('admin.users')->with('status', 'Suppression effectué avec succèss.');
    }
}
