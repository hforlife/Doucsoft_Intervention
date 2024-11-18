<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention_Type;
use App\Models\Intervention;

class VueController extends Controller
{
    //
    public function addint(){
        return view('Admin/usage/inter/add-int');
    }

    public function addfeedback(){
        $list = Intervention_Type::all();
        $list1 = Intervention::all();
        return view('Admin/usage/feedback/add-feedback', compact('list', 'list1'));
    }

    public function addsupview(){
        return view('Admin/usage/user/add-sup');
    }
    public function addageview(){
        return view('Admin/usage/user/add-age');
    }

    public function typeintaddview(){
        return view('Admin/usage/type/add-type-int');
    }
    public function loginview(){
        return view('Auth.authentication-login');
    }
}
