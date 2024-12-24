<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checklist;
use App\Models\Intervention;
use Illuminate\Http\Request;

class CheckListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $collection = Checklist::all();
        return view('admin.checklist', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $items = Intervention::all();
        return view('admin.usage.checklist.add', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string',
            'intervention_id' => 'required',
            'data' => 'required',
        ]);
        $items = new Checklist();
        $items->name = $request->name;
        $items->intervention_id = $request->intervention_id;
        $items->data = json_encode($request->data);
        $items->save();

        return redirect()->route('checklist.index')->with('status', 'Checklist created successfully');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $items = Checklist::findOrFail($id);
        $items->delete();

        return redirect()->route('checklist.index')->with('status', 'Checklist Supprimé avec success');
    }
}
