<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\Intervention;
use App\Models\Intervention_Type;
use App\Models\Rapports;
use App\Models\Superviseur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Conteur du tableau de bord
    public function index(){
        $admin = Admin::count();
        $agent = Rapports::count();
        $int = Intervention::count();
        $type_int = Intervention_Type::count();

        $list1 = Admin::all();
        $list2 = Superviseur::all();
        $list3 = Agent::all();

        return view('admin/index', compact('admin', 'agent', 'int', 'type_int', 'list1', 'list2', 'list3'));
    }

    public function feedback(){
        $feedback = Rapports::all();
        return view('admin.feedback', compact('feedback'));
    }
    public function intervention(){
        $inter = Intervention::all();
        return view('admin.inter', compact('inter'));
    }
}
