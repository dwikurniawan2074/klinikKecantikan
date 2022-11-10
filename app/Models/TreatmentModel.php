<?php

namespace App\Models;

use CodeIgniter\Model;

class TreatmentModel extends Model
{
    protected $table      = 'treatment';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['nama_treatment', 'deskripsi', 'harga'];

    public function getTreatment()
    {
        return $this->findAll();
    }
}
