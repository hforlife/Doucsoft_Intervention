<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domaine;
use App\Models\Intervention_Type;
use Illuminate\Http\Request;

class DomaineInterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $entrys = Domaine::paginate(5);
        return view('admin.domain', compact('entrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $entrys = Intervention_Type::all();
        return view('admin.usage.domain.add-domain', compact('entrys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'intervention_type_id' => 'required',
        ]);

        $entrys = new Domaine();
        $entrys->name = $request->name;
        $entrys->description = $request->description;
        $entrys->intervention_type_id = $request->intervention_type_id;
        $entrys->save();

        return redirect()->route('dom.index')->with('status', 'Ajout effectué avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $entrys = Domaine::findOrFail($id);
        $entry = Intervention_Type::all();
        return view('admin.usage.domain.edit-domain', compact('entrys', 'entry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'intervention_type_id' => 'required',
        ]);

        $entrys = Domaine::findOrFail($id);
        $entrys->name = $request->name;
        $entrys->description = $request->description;
        $entrys->intervention_type_id = $request->intervention_type_id;
        $entrys->update();

        return redirect()->route('dom.index')->with('status', 'Modification effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $entry = Domaine::findOrFail($id);
        $entry->delete();
        return redirect()->route('dom.index')->with('status', 'Suppression effectué vec succès');
    }
}
