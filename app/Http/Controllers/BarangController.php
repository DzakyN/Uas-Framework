<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaBarang' => 'required|string|max:255',
            'satuan' => 'required|in:satuan,dus',
            'jenisBarang' => 'required|in:makanan,minuman,pendidikan',
            'hargaBeli' => 'required|integer',
            'hargaJual' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'namaBarang' => 'required|string|max:255',
            'satuan' => 'required|in:satuan,dus',
            'jenisBarang' => 'required|in:makanan,minuman,pendidikan',
            'hargaBeli' => 'required|integer',
            'hargaJual' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $barang->update($request->all());
        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
