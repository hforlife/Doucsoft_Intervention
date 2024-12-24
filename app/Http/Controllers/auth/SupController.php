<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Superviseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin/usage/user/add-sup');
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
            'email' => 'required|email|unique:superviseurs,email',
            'address'=>'required|string',
            'number'=>'required|min:8',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $sup = Superviseur::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);


        $sup->assignRole('superviseur');

        return redirect()->route('users')->with('status', 'Ajout effectué avec succes.');
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
        $Sup = Superviseur::find($id);
        return view('admin.usage.user.edit-sup', compact('Sup'));
    }

    public function update(Request $request, int $id)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'requiredstring',
            'number' => 'required|min:8',
            'password' => 'nullable|string|min:8|confirmed', // Le champ password peut être nul
        ]);

        // Rechercher l'admin dans la base de données
        $Sup = Superviseur::findOrFail($id); // Assurez-vous d'utiliser le bon modèle

        // Mise à jour des champs
        $Sup->name = $request->name;
        $Sup->email = $request->email;
        $Sup->address = $request->address;
        $Sup->number = $request->number;

        // Si le mot de passe est fourni, on le hash et on le met à jour
        if ($request->filled('password')) {
            $Sup->password = Hash::make($request->password); // Hash du mot de passe
        }

        // Enregistrement des modifications
        $Sup->save();

        // Redirection avec un message de succès
        return redirect()->route('users')->with('status', 'Modification effectuée avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sups = Superviseur::find($id);
        $sups->delete();
        return redirect()->route('users')->with('status', 'Suppression effectué avec succèss.');
    }
}
