<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Intervention;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'intervention_type' => 'required',
            'factory' => 'required',
            'time' => 'required',
            'agent' => 'required',
            'data*serviceDescription[]' => 'required',
            'data*riskLevel1' => 'required',
            'data*observation[]' => 'required',
            'data*completed[]' => 'required',
            'data*tache[]' => 'required',
            'data*check[]' => 'required',
        ]);

        $entry = new Intervention();
        $entry->name = $request->name;
        $entry->intervention_type = $request->intervention_type;
        $entry->factory = $request->factory;
        $entry->time = $request->time;
        $entry->agent = $request->agent;
        $entry->data = $request->data;
        $entry->save();

        return redirect();
    }
}
