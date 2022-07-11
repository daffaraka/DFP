<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_product';

    protected $fillable =
     [
        'id_product',
        'nama_produk',
        'harga_produk',
        'foto_produk'
    ];

    // public function Cart(){
    //     return $this->hasMany(Cart::class);
    // }
}
