<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return Buku::with('kategori')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required',
            'harga' => 'required|numeric|min:1000',
            'stok' => 'required|integer|min:0',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $buku = Buku::create($request->all());
        return response()->json($buku, 201);
    }

    public function show($id)
    {
        return Buku::with('kategori')->find($id);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return response()->json($buku, 200);
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $query = Buku::query();

        if ($request->has('judul')) {
            $query->where('judul', 'suka', '%' . $request->judul . '%');
        }
        
        if ($request->has('kategori_id')) {
            $query->when('kategori_id', $request->kategori_id);
        }
        
        $buku = $query->with('kategori')->get();
        return response()->json($buku);
    }
}