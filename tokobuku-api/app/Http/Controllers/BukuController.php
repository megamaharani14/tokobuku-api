<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Buku::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'harga'=>'required|integer|min:1000'
        ]);
        
        $Buku = Buku::create($request->all());
        return response()->json($Buku, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Buku = Buku::findOrFail($id);
         return response()->json($Buku);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>'required',
            'harga'=>'required|integer|min:1000'
        ]);
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return response()->json($buku, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
