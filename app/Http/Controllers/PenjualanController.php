<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pembelian;
use App\Models\Barang;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::with('pembelian')->get();
        $totalKeuntungan = $penjualan->sum('keuntungan');
        return view('penjualan.index', compact('penjualan', 'totalKeuntungan'));
    }

    public function create()
    {
        $pembelian = Pembelian::with('barang')->get();
        return view('penjualan.create', compact('pembelian'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembelian_id' => 'required|exists:pembelian,id',
            'jumlah_jual' => 'required|integer',
        ]);

        $pembelian = Pembelian::find($request->pembelian_id);
        $barang = $pembelian->barang;
        $harga_jual = $barang->hargaJual;
        $total_harga = $request->jumlah_jual * $harga_jual;
        $keuntungan = $total_harga - ($pembelian->total_harga / $pembelian->total_beli * $request->jumlah_jual);

        Penjualan::create([
            'pembelian_id' => $request->pembelian_id,
            'jumlah_jual' => $request->jumlah_jual,
            'harga_jual' => $harga_jual,
            'total_harga' => $total_harga,
            'keuntungan' => $keuntungan,
        ]);

        return redirect()->route('penjualan.index');
    }

    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    public function edit(Penjualan $penjualan)
    {
        $pembelian = Pembelian::with('barang')->get();
        return view('penjualan.edit', compact('penjualan', 'pembelian'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'pembelian_id' => 'required|exists:pembelian,id',
            'jumlah_jual' => 'required|integer',
        ]);

        $pembelian = Pembelian::find($request->pembelian_id);
        $barang = $pembelian->barang;
        $harga_jual = $barang->hargaJual;
        $total_harga = $request->jumlah_jual * $harga_jual;
        $keuntungan = $total_harga - ($pembelian->total_harga / $pembelian->total_beli * $request->jumlah_jual);

        $penjualan->update([
            'pembelian_id' => $request->pembelian_id,
            'jumlah_jual' => $request->jumlah_jual,
            'harga_jual' => $harga_jual,
            'total_harga' => $total_harga,
            'keuntungan' => $keuntungan,
        ]);

        return redirect()->route('penjualan.index');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index');
    }
}
