<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pembelian';

    protected $fillable = [
        'tanggal_pembelian',
        'total_pembelian',
        'id_pelanggan',
        'id_ongkir',
        'nama_kota',
        'tarif',
        'alamat_pengiriman'
    ];
}
