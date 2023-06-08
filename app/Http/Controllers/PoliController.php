<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poli = Poli::all();
        return response()->json($poli);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $poli = Poli::create($request->all());
        return response()->json($poli, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Poli $poli, $id)
    {
        $poli = Poli::findOrFail($id);
        return response()->json($poli);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poli $poli, $id)
    {
        $poli = Poli::findOrFail($id);
        $poli->update($request->all());
        return response()->json($poli);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poli $poli, $id)
    {
        $poli = Poli::findOrFail($id);
        $poli->delete();
        return response()->json($poli);
    }
}
