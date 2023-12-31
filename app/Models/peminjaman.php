<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        "tanggal_peminjam",
        "tanggal_kembali",  
        "buku_id",  
        "anggota_id",  
        "petugas_id"  
    ];
}
