<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_produk', 'harga', 'stock'];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
}
