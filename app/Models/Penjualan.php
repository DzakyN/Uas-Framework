<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembelian_id',
        'jumlah_jual',
        'harga_jual',
        'total_harga',
        'keuntungan',
    ];

    protected $table = 'penjualan';

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id');
    }
}
