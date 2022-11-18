<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderanModel extends Model
{
    protected $table      = 'daftar_order';
    protected $allowedFields = ['nama','nomor_handphone','tanggal','total_harga'];

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['nama_treatment', 'deskripsi', 'harga'];


}
