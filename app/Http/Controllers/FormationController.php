<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    //CREATE 
    public function ajouter_formation(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'user_id' => 'required',
            'end_date' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $formation = new Formation();
        $formation->title = $request->title;
        $formation->description = $request->description;
        $formation->start_date = $request->start_date;
        $formation->user_id = $request->user_id;
        $formation->end_date = $request->end_date;

        // Gestion du téléchargement de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('formations', 'public');
            $formation->image = $imagePath;
        }

        $formation->save();

        return redirect('add-formation')->with('status', 'Ajout effectué avec succès.');
    }
    public function create()
    {
        // Récupérer les utilisateurs ayant le rôle de formateur
        $formations = User::where('userType', 'formateur')->get();

        // Passer les formateurs à la vue
        return view('Admin.fonction.add-formation', compact('formations'));

    }


    //READ
    public function lister_formation()
    {
        $formation = formation::paginate(6);
        return view('admin.admin-form', compact('formation'));
    }

    //UPDATE
    public function modifier_formation($id)
    {
        $formation = Formation::find($id);
        $users = User::all();
        return view('Admin.fonction.update-formation')->with(compact('formation', 'users'));
    }
    public function modifier_formation_traitement(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'user_id' => 'required',
            'end_date' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $formation = Formation::find($request->id);
        $formation->title = $request->title;
        $formation->description = $request->description;
        $formation->start_date = $request->start_date;
        $formation->user_id = $request->user_id;
        $formation->end_date = $request->end_date;

       // Gestion du téléchargement de l'image
    if ($request->hasFile('image')) {
        // // Supprimer l'ancienne image si elle existe
        // if ($formation->image) {
        //     storage::delete('public/' . $formation->image);
        // }
        // Enregistrer la nouvelle image
        $imagePath = $request->file('image')->store('formations', 'public');
        $formation->image = $imagePath;
    }

        $formation->update();

        return redirect('a-formation')->with('status', 'Modification effectuée avec succès.');
    }

    //DELETE
    public function supprimer_formation($id)
    {
        $users = formation::find($id);
        $users->delete();

        return redirect('a-formation')->with('status', 'Suppression effectué avec succes.');
    }
}