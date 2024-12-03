<?php

namespace App\Http\Controllers\Admin;

use App\Enums\judge;
use App\Http\Controllers\Controller;
use App\Models\Factory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $entrys = Factory::paginate(5);
        return view('admin.factory', compact('entrys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $entrys = judge::cases();
        return view('admin.usage.factory.add-factory', compact('entrys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'status' => ['required', new Enum(judge::class)],
            'description' => 'required|string',
            'address' => 'required|string',
            'n°tel' => 'required|integer',
            'n°responsable' => 'required|integer',
        ]);

        $entrys = new Factory();
        $entrys->name = $request->name;
        $entrys->forme = $request->forme;
        $entrys->description = $request->description;
        $entrys->address = $request->address;
        $entrys->n°tel = $request->n°tel;
        $entrys->n°responsable = $request->n°responsable;
        $entrys->save();

        return redirect()->route('factory.index')->with('success', 'Ajout effectué avec succèss.');
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
        $entrys = Factory::findOrFail($id);
        $entrys1 = judge::cases();
        return view('admin.usage.factory.edit-factory', compact('entrys', 'entrys1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'status' => ['required', new Enum(judge::class)],
            'description' => 'required|string',
            'address' => 'required|string',
            'n°tel' => 'required|integer',
            'n°responsable' => 'required|integer'
        ]);

        $entrys = Factory::findOrFail($id);
        $entrys->name = $request->name;
        $entrys->forme = $request->forme;
        $entrys->description = $request->description;
        $entrys->address = $request->address;
        $entrys->n°tel = $request->n°tel;
        $entrys->n°responsable = $request->n°responsable;
        $entrys->update();

        return redirect()->route('factory.index')->with('success', 'Modification effectué avec succèss.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $entrys = Factory::findOrFail($id);
        $entrys->delete();

        return redirect()->route('factory.index')->with('success', 'Suppression effectué avec succès.');
    }
}
