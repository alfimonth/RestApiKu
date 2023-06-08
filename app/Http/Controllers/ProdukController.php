<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return response()->json($produks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $produk = Produk::create($request->all());
        // return response()->json(['data' => $produk], 201);
        $produk = Produk::create($request->all());
        return response ($produk->toArray(),201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $produk = Produk::find($id);

        // if ($produk) {
        //     return response()->json([
        //         'status' => 'success',
        //         'produk' => $produk
        //     ]);
        // } else {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Produk tidak ditemukan'
        //     ], 404);
        // }
        $produk = Produk::findOrFail($id);
        return $produk->toArray();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk, $id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->update($request->all());
        // return response()->json(['data' => $produk]); 
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return response ($produk->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $produk = Produk::findOrFail($id);
        // $produk->delete();
        // return response()->json(['data' => $produk]);
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return response ($produk->toArray());
    }
}
