<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function list()
    {
        $users = User::where('userType', 'adherent')->paginate(8);
        $user = Etudiant::all();

        return view('admin.admin-etd', compact('users', 'user'));
    }

    public function add(Request $request)
    {
        $request -> validate([
            'user_id' => 'required',
            'form_id' => 'required',
            'inscription_date' => 'required',
            'status' => 'required',
        ]);
        
        $user = new Etudiant();
        $user->user_id = $request->user_id;
        $user->form_id = $request->form_id;
        $user->inscription_date = $request->inscription_date;
        $user->status = $request->status;
        $user->save();

        return redirect('article')->with('user', $user);

    }
}