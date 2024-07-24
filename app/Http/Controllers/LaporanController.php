<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Penjualan;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function laporanPembelian()
    {
        $pembelian = Pembelian::with('barang', 'supplier')->get();
        $pdf = PDF::loadView('laporan.pembelian', compact('pembelian'));
        return $pdf->download('laporan_pembelian.pdf');
    }

    public function laporanPenjualan()
    {
        $penjualan = Penjualan::with('pembelian.barang', 'pembelian.supplier')->get();
        $pdf = PDF::loadView('laporan.penjualan', compact('penjualan'));
        return $pdf->download('laporan_penjualan.pdf');
    }
}
