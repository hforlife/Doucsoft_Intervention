<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Intervention;
use App\Models\Intervention_Type;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    public function index(){
        $inters = Intervention::paginate(5);
        return view('admin/inter', compact('inters'));
    }
    public function create()
    {
        $list = Agent::all();
        $list1 = Intervention_Type::all();
        return view('Admin/usage/inter/add-int', compact('list', 'list1'));
    }

    public function store(Request $request)
    {

        // Validation
        $request->validate([
            'name' => 'required|string',
            'intervention_type' => 'required|string',
            'factory' => 'required|string',
            'time' => 'required|date',
            'agent' => 'required|string',
            'data' => 'array',
        ]);

        // Stockage
        $entry = new Intervention();
        $entry->name = $request->name;
        $entry->intervention_type = $request->intervention_type;
        $entry->factory = $request->factory;
        $entry->time = $request->time;
        $entry->agent = $request->agent;
        $entry->data = json_encode($request->data); // Si colonne JSON, vous pouvez assigner directement
        $entry->save();

        return redirect()->route('inter.index')->with('success', 'Intervention ajoutée avec succès.');
    }

    public function edit(int $id){
        $entry = Intervention::findOrFail($id);
        $list = Agent::all();
        $list1 = Intervention_Type::all();
        return view('Admin/usage/inter/edit-int', compact('entry', 'list', 'list1'));
    }
    public function update(Request $request, int $id){


        // Validation
        $request->validate([
            'name' => 'required|string',
            'intervention_type' => 'required|string',
            'factory' => 'required|string',
            'time' => 'required|date',
            'agent' => 'required|string',
            'data' => 'array',
        ]);

        // Stockage
        $entry = Intervention::findOrFail($id);
        $entry->name = $request->name;
        $entry->intervention_type = $request->intervention_type;
        $entry->factory = $request->factory;
        $entry->time = $request->time;
        $entry->agent = $request->agent;
        $entry->data = json_encode($request->data); // Si colonne JSON, vous pouvez assigner directement
        $entry->update();

        return redirect()->route('inter.index')->with('success', 'Intervention modifiée avec succès.');
    }

    //
    public function destroy(int $id){
        $inters = Intervention::findOrFail($id);
        $inters->delete();

        return redirect()->route('inter.index')->with('success', 'Intervention supprimée avec succès.');
    }

}
