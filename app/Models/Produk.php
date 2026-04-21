<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // Tambahkan baris ini
    protected $fillable = ['nama_kopi', 'harga', 'stok'];
}