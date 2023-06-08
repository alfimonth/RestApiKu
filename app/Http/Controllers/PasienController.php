<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        return response()->json($pasien);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pasien = Pasien::create($request->all());
        return response()->json($pasien, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien, $id)
    {
        $pasien = Pasien::findOrFail($id);
        return response()->json($pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return response()->json($pasien);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return response()->json($pasien);
    }
}
