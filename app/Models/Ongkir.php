<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ongkir extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ongkir';

    protected $fillable = [
        'nama_kota',
        'tarif'
    ];

    public function Cart(){
        return $this->hasMany(Cart::class);
    }
}
