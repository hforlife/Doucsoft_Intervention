<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function total_formation()
    {
        //Total
        $total1 = formation::count();
        $total2 = 0;
        $total3 = 0;
        $total4 = 0;

        //Lister Utilisateur
        $user1 = 0;
        $user2 = 0;

        return view('admin.Admin')->with(compact('total1', 'total2', 'total3', 'total4', 'user1', 'user2'));
    }

}