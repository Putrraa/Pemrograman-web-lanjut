<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;


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

        $message= [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
        ];

        $validateedData = $request->validate([
            'id' => 'required|numeric|unique:produk',
            'nama_produk' => 'required|unique:produk',
        ],$message);
        $data = new Produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->kategori_id =$request->kategori;
        $data->harga = $request->harga;
        $data->stock =$request->stock;
        $data->save();
        return redirect('/tampil-produk')->with('success','Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_id = $request->kategori_id;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->update();

        return redirect('/tampil-produk')->with('succes','Data berhasil diubah');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/tampil-produk')->with('success','Data berhasil dihapus');
    }
    
    public function excel(){
        return Excel::download(new ProdukExport, 'produk.xlsx');
    }

    public function pdf(){
        $data = Produk::all();
        return view('produk.pdfproduk', ['dataProduk'=>$data]);
    }

    public function chart(){
        $dataLabel = Produk::orderBy('nama_produk', 'asc')
        ->pluck('nama_produk')->toArray();
        $dataStock = Produk::orderBy('nama_produk', 'asc')
        ->pluck('stock')->toArray();

        return view('produk.chart', compact('dataLabel', 'dataStock'));
    }
}
