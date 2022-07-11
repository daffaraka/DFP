<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_user',
        'id_produk',
        'nama_produk',
        'harga_produk_cart',
        'foto_produk_cart',
        'transaction_status',
    ];
}
