<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'supplier_id', // Pastikan kolom supplier_id ada di $fillable
        'total_beli',
        'total_harga',
    ];

    protected $table = 'pembelian';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'kodeBarang');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
