<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Barang;
use App\Models\Supplier;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::with('barang', 'supplier')->get();
        return view('pembelian.index', compact('pembelian'));
    }

    public function create()
    {
        $barang = Barang::all();
        $suppliers = Supplier::all();
        return view('pembelian.create', compact('barang', 'suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,kodeBarang',
            'supplier_id' => 'required|exists:suppliers,id',
            'total_beli' => 'required|integer',
        ]);

        $barang = Barang::find($request->barang_id);
        $total_harga = $barang->hargaBeli * $request->total_beli;

        Pembelian::create([
            'barang_id' => $request->barang_id,
            'supplier_id' => $request->supplier_id,
            'total_beli' => $request->total_beli,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('pembelian.index');
    }

    public function show(Pembelian $pembelian)
    {
        return view('pembelian.show', compact('pembelian'));
    }

    public function edit(Pembelian $pembelian)
    {
        $barang = Barang::all();
        $suppliers = Supplier::all();
        return view('pembelian.edit', compact('pembelian', 'barang', 'suppliers'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,kodeBarang',
            'supplier_id' => 'required|exists:suppliers,id',
            'total_beli' => 'required|integer',
        ]);

        $barang = Barang::find($request->barang_id);
        $total_harga = $barang->hargaBeli * $request->total_beli;

        $pembelian->update([
            'barang_id' => $request->barang_id,
            'supplier_id' => $request->supplier_id,
            'total_beli' => $request->total_beli,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('pembelian.index');
    }

    public function destroy(Pembelian $pembelian)
    {
        $pembelian->delete();
        return redirect()->route('pembelian.index');
    }
}
