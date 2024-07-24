<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'kodeBarang';

    protected $fillable = [
        'namaBarang',
        'satuan',
        'jenisBarang',
        'hargaBeli',
        'hargaJual',
        'stok',
    ];

    protected $table = 'barang';
}
