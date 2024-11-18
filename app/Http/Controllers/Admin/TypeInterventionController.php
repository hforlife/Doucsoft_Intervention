<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Intervention_Type;
use Illuminate\Http\Request;

class TypeInterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list = Intervention_Type::all();
        return view('Admin/type-int', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $type = new Intervention_Type();
        $type->name = $request->name;
        $type->description = $request->description;
        $type->save();

        return redirect()->route('admin.type_intervention.index')->with('status', 'Ajout effectué avec succèss.');
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
        $types = Intervention_Type::find($id);
        return view('Admin/usage/type/edit-type-int', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
        ]);

        $type = Intervention_Type::findOrFail($id);
        $type->name = $request->name;
        $type->description = $request->description;
        $type->update();

        return redirect()->route('admin.type_intervention.index')->with('status', 'Modification effectué avec succèss.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $lists = Intervention_Type::find($id);
        $lists->delete();
        return redirect()->route('admin.type_intervention.index')->with('status', 'Suppression effectué avec succèss.');
    }
}
