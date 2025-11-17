<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori::all();
            return view('kategori.index', ['dataKategori' => $data]);
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $kategori = new Kategori();
        $kategori->id = $request->id;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('/tampil-kategori');
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();

        return redirect('/tampil-kategori');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect('/tampil-kategori');
    }
}
