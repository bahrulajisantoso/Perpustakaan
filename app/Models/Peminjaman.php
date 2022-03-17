<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    
    protected $table = '$peminjamans';
    protected $fillable = ['nama_peminjam', 'judul_buku', 'nama_pegawai', 'tgl_pinjam', 'tgl_kembali'];
}
