<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Produk;

class ProdukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produk::all();
    }

    public function headings() : array {
        return[
            'Nama Produk',
            'Kategori',
            'Harga',
            'Stok'
        ];
    }
}
