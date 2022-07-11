<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable =[
    'id_user',
    'id_produk',
    'nama_produk',
    'harga_produk_cart',
    'foto_produk_cart',
    'status_cart',
    'total_sementara_cart',
    'id_ongkir',
    'ongkir_cart',
    'status_pembayaran_cart',
    'snap_token',
    ];

    protected $primaryKey = 'id_cart';

    // public function Product(){
    //     return $this->belongsTo(Product::class,'id_produk','id_product');
    // }

    // public function Ongkir(){
    //     return $this->belongsTo(Ongkir::class,'id_ongkir','id_ongkir');
    // }

    // public function User(){
    //     return $this->belongsTo(User::class,'id_user','id');
    // }
}
