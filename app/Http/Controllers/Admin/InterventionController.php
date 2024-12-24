<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Intervention;
use App\Models\Intervention_Type;
use App\Models\Domaine;
use App\Models\Factory;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    public function index()
    {
        $inters = Intervention::paginate(5);
        return view('admin/inter', compact('inters'));
    }

    // FICHE
    public function fiche($id)
    {
        $domaine = Domaine::findOrFail($id);
        $entreprise = Factory::all();
        $agent = Agent::all();
        return view('Admin/usage/inter/fiche', compact('domaine', 'entreprise', 'agent'));
    }

    // ADD 0
    public function create($id)
    {
        $list = Agent::all();
        $list1 = Intervention_Type::all();
        $list2 = Domaine::findOrFail($id);
        return view('Admin/usage/inter/add-int', compact('list', 'list1', 'list2'));
    }

    // ADD 1
    public function all()
    {
        $domains = Intervention_type::all();
        return view('Admin/usage/inter/add-int', compact('domains'));
    }
    // ADD 2
    public function show($id)
    {
        $domain = Intervention_Type::with('domaines')->findOrFail($id);
        return view('Admin/usage/inter/dom', compact('domain'));
    }


    // ADD 3
    public function store(Request $request)
    {

        // Validation
        $request->validate([
            'name' => 'required|string',
            'domaines_id' => 'required',
            'factory_id' => 'required',
            'time' => 'required|date',
            'agent_id' => 'required',
            'data' => 'array',
        ]);

        // Stockage
        $entry = new Intervention();
        $entry->name = $request->name;
        $entry->domaines_id = $request->domaines_id;
        $entry->factory_id = $request->factory_id;
        $entry->time = $request->time;
        $entry->agent_id = $request->agent_id;
        $entry->data = json_encode($request->data); // Si colonne JSON, vous pouvez assigner directement
        $entry->save();

        return redirect()->route('inter.index')->with('status', 'Intervention ajoutée avec succès.');
    }

    // EDIT
    public function edit(int $id)
    {
        $entry = Intervention::findOrFail($id);
        $list = Agent::all();
        $list1 = Intervention_Type::all();
        return view('Admin/usage/inter/edit-int', compact('entry', 'list', 'list1'));
    }

    // UPDATE
    public function update(Request $request, int $id)
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
        $entry = Intervention::findOrFail($id);
        $entry->name = $request->name;
        $entry->intervention_type = $request->intervention_type;
        $entry->factory = $request->factory;
        $entry->time = $request->time;
        $entry->agent = $request->agent;
        $entry->data = json_encode($request->data); // Si colonne JSON, vous pouvez assigner directement
        $entry->update();

        return redirect()->route('inter.index')->with('status', 'Intervention modifiée avec succès.');
    }

    // DELETE
    public function destroy(int $id)
    {
        $inters = Intervention::findOrFail($id);
        $inters->delete();

        return redirect()->route('inter.index')->with('status', 'Intervention supprimée avec succès.');
    }
}
