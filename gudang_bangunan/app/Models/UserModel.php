<?php

namespace App\Models;

use CodeIgniter\Model;

// Deklarasi kelas UserModel 
class UserModel extends Model
{
    // Nama tabel yang akan digunakan oleh model ini
    protected $table = 'users';

    // Nama kolom primary key pada tabel
    protected $primaryKey = 'id';

    // Daftar kolom yang diizinkan untuk diisi 
    protected $allowedFields = ['username', 'password'];
}
