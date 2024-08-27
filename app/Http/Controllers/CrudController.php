<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class CrudController extends Controller
{
    //

    //CREATE 
    public function ajouter_formateur(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'userType' => 'required',
        // ]);

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->userType = $request->userType;
        // $user->save();

        // Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Ajout de la confirmation du mot de passe
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashage du mot de passe
        ]);

        // Attribution du rôle à l'utilisateur (en fonction du role "admin" & "formateur")
        if('role' == 'admin'){
            $user->assignRole('admin');
        }elseif('role' == 'formateur'){
            $user->assignRole('formateur');
        }


        return redirect('add-formateur')->with('status', 'Ajout effectué avec succes.');
    }

    //READ
    public function lister_formateur()
    {
        $users = User::all();
        return view('Admin.admin-f', compact('users'));
    }

    //UPDATE
    public function modifier_formateur($id)
    {
        $users = User::find($id);

        return view('Admin.fonction.update-formateur', compact('users'));
    }
    
    public function modifier_formateur_traitement(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'userType' => 'required',
        ]);

        //dd($request['id']);
        $user = User::find($request['id']);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->userType = $request['userType'];
        $user->update();

        return redirect('a-formateur')->with('status', 'Modification effectué avec succes.');
    }

    //DELETE
    public function supprimer_formateur($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('a-formateur')->with('status', 'Suppression effectué avec succes.');
    }
}