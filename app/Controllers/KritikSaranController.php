<?php

namespace App\Controllers;

use App\Models\KritikSaranModel;
use App\Controllers\BaseController;

class KritikSaranController extends BaseController
{
    public function __construct()
    {
        $this->modelKritikSaran = new KritikSaranModel();
    }
    public function store()
    {
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $this->modelKritikSaran->insert($data);
        return redirect()->to('/');
      
    }
    public function delete($id){
        $this->modelKritikSaran->delete($id);
        return redirect()->to('/admin/halaman_kritik_saran');
    }
}
