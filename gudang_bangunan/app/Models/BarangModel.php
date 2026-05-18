<?php

namespace App\Models;

use CodeIgniter\Model;

// Deklarasi kelas BarangModel 
class BarangModel extends Model
{
    // Nama tabel yang akan digunakan oleh model ini
    protected $table = 'barang';

    // Nama kolom primary key pada tabel
    protected $primaryKey = 'id_barang';

    // Daftar kolom yang diizinkan untuk diisi 
    protected $allowedFields = [
        'nama_barang',       
        'kategori',         
        'satuan',            
        'harga_satuan',      
        'stok_tersedia',     
        'tanggal_masuk'      
    ];
}
