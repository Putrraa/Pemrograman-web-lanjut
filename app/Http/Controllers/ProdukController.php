<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;

class ProdukController extends Controller
{
    public function index(){
        $data = produk::all();
        $kategori = kategori::all();
        return view('produk.index', ['dataproduk' => $data, 'kategori' => $kategori]);
    }

    public function create(){
        $kategori = kategori::all();
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request){
        $data = new Produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->kategori_id =$request->kategori;
        $data->harga = $request->harga;
        $data->stock =$request->stock;
        $data->save();
        return redirect('/tampil-produk');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->update();

        return redirect('/tampil-produk');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk');
    }
    
}
