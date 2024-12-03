<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\Intervention;
use App\Models\Intervention_Type;
use App\Models\Superviseur;
use App\Models\Factory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Conteur du tableau de bord
    public function index(){
        $admin = Admin::count();
        $int = Intervention::count();
        $type_int = Intervention_Type::count();
        $factory = Factory::count();

        $list1 = Admin::paginate(5);
        $list2 = Superviseur::paginate(5);
        $list3 = Agent::paginate(5);

        return view('admin/index', compact('admin', 'int', 'type_int', 'factory', 'list1', 'list2', 'list3'));
    }

    
}
