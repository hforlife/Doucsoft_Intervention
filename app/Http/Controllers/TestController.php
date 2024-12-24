<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention_Type;

class TestController extends Controller
{
    //
    public function index(){
        $tests = Intervention_type::all();
        return view('test.test', compact('tests'));
    }
    public function show($id){
        $domain = Intervention_Type::with('domaines')->findOrFail($id);
        return view('test.domain', compact('domain'));
    }
}
