<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapTokenService;
use Exception;
use Midtrans\Config;
use Midtrans\Snap;
class CartController extends Controller
{
    
    
    public function cartList()
    {
        $cart = new Transaksi();
        $this->data['cartList'] = $cart->all();
        
        // dd($this->data);
        return view('user.cart',$this->data);
    }

    public function addToCart($id, Request $request)
    {   
        $cart = new Transaksi();
        $this->data['cartList'] = $cart->all();


            $addToCart = $request->all();
            $fromProduct = Product::where('id_product',$id);
            $addToCart['id_user'] = Auth::user()->id;
            $addToCart['id_produk'] = $fromProduct->value('id_product');
            $addToCart['nama_produk'] = $fromProduct->value('nama_produk');
            $addToCart['foto_produk_cart'] = $fromProduct->value('foto_produk');
            $addToCart['harga_produk_cart'] =  $fromProduct->value('harga_produk');
            $addToCart['transaction_status'] = 'pending';

            Transaksi::create($addToCart);
            
            $this->data['shop'] = Product::all();


            return redirect()->route('cart.cartList', $this->data);
    }
    public function getPembayaran($id)
     {
        $getPembayaran = Transaksi::find($id);

        return view('user.payment',compact('getPembayaran'));
    }


    public function payNow ($id) 
    {

        Config::$serverKey = 'SB-Mid-server-x22KwzovWFpHlkw-LTxSeuTw';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => 'MIDTRANS-'.rand().'-'.Auth::user()->name,
                'gross_amount' => Transaksi::where('id_transaksi',$id)->value('harga_produk_cart'),
            ),
            'customer_details' => array(
                'first_name' => 'Saudara',
                'last_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => '08111222333',
            ),
            
        );

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($params)->redirect_url;
            
            
            // Redirect to Snap Payment Page
            header('Location: ' . $paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }

          return redirect($paymentUrl);

    }

    public function destroy($id) 
    {
        $cart = new Transaksi();
     

        $delete = Transaksi::find($id);

        $delete->delete();

        $this->data['cartList'] = $cart->all();
        return redirect()->route('cart.cartList',$this->data);
    }
    
}
