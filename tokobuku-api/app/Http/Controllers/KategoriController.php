<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index() {
        return Kategori::all(); }

    public function store(Request $request) {
        $request->validate(['nama_kategori'=>'required']);
        $kategori = Kategori::create($request->all());
        return response()->json($kategori, 201);
    }

   
    public function show(string $id)
    {
        $kategori = Kategori::findOrFail($id);
         return response()->json($kategori);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['nama_kategori']);
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());
        return response()->json($kategori, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return response()->json(null, 204);
    }
}
