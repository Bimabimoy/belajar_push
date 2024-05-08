<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'rasio_minimal',
        'gambar',
        'level_teknologi',
        'level_keterampilan',
        'stok_barang',
        'barang_baik',
        'barang_rusak',
        'jurusan'
    ];
}
