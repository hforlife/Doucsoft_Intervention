<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Superviseur;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $admin = Admin::all();
        $sup = Superviseur::all();
        $agent = Agent::all();
        return view('Admin.user', compact('admin', 'sup', 'agent'));
    }

    public function show() {
        return view('Admin/usage/user/add-user');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $admin->assignRole('admin');

        return redirect()->with('status', 'Ajout effectué avec succes.');
    }

    //UPDATE
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.usage.user.edit-user', compact('admin'));
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
        $admin = Admin::findOrFail($id); // Assurez-vous d'utiliser le bon modèle

        // Mise à jour des champs
        $admin->name = $request->name;
        $admin->email = $request->email;

        // Si le mot de passe est fourni, on le hash et on le met à jour
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password); // Hash du mot de passe
        }

        // Enregistrement des modifications
        $admin->save();

        // Redirection avec un message de succès
        return redirect()->route('admin.users')->with('status', 'Modification effectuée avec succès.');
    }

    //DELETE

    public function destroy($id)
    {
        $admins = Admin::find($id);
        $admins->delete();
        return redirect()->route('admin.users')->with('status', 'Suppression effectué avec succèss.');
    }
}
