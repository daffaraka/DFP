<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
  
    public function product()
    {
        $this->data['product'] = Product::all();
        return view('admin.product', $this->data);
    }

    public function shop()
    {
        $this->data['shop'] = Product::all();
        return view('user.shop', $this->data);
    }
   
    public function create()
    {
        return view('admin.product-tambah');
    }

  
    public function store(Request $request)
    {
      
     
        $imageName = $request->file('foto_produk')->getClientOriginalName();
        $request->file('foto_produk')->move('storage/produk/foto',$request->nama_produk.'-'.$imageName);
        
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'foto_produk' => $request->nama_produk.'-'.$imageName
        ]);
        return redirect()->route('admin.product');
    }

  
    public function show($id)
    {
       $showProduct = Product::find($id);

       return view('user.show-product',compact('showProduct'));
    }

  
    public function edit($id)
    {
        $editProduct = Product::find($id);

        return view('admin.product-edit', compact('editProduct'));
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete($id);
        Storage::disk('public')->delete('storage/produk/foto'.$product->foto_produk);
       
        return redirect()->route('admin.product');
    }
}
