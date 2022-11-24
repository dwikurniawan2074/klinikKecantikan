<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarOrder extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'daftar_order';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'nomor_handphone',
        'id_jenis_treatment',
        'tanggal',
        'total_harga',
        'isComplete',
        'isCancel'
    ];

    
}
