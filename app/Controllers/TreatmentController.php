<?php

namespace App\Controllers;

use App\Models\DaftarOrder;
use App\Models\OrderCancel;
use App\Models\OrderComplete;
use App\Models\TreatmentModel;
use App\Controllers\BaseController;

class TreatmentController extends BaseController
{
    public function __construct()
    {
        $this->modelTreatment = new TreatmentModel();
        $this->modelDaftarOrder = new DaftarOrder();
    }
    public function store()
    {
        $foto = $this->request->getFile('gambar_treatment');
        $data = [
            'nama_treatment' => $this->request->getVar('nama_treatment'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'gambar_treatment' => $foto->getName()
        ];
        $foto->move('../public/gambar_treatment', $foto->getName());
        $this->modelTreatment->insert($data);
        return redirect()->to('/admin/halaman_treatment');
    }
    public function delete($id)
    {
        $this->modelTreatment->delete($id);
        return redirect()->to('/admin/halaman_treatment');
    }
    public function update()
    {

        $data = [
            'nama_treatment' => $this->request->getVar('nama_treatment'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
        ];
        $id = $this->request->getVar('id');
        $this->modelTreatment->update($id, $data);
        return redirect()->to('/admin/halaman_treatment');
    }

    public function deleteOrder($id)
    {
        $this->modelDaftarOrder->delete($id);
        return redirect()->to('/admin/halaman_daftar_order');
    }

    public function storeComplete($id)
    {
        $this->modelDaftarOrder->where('id', $id)->set('isComplete', 1)->update();
        return redirect()->to('/admin/halaman_order_complete');
    }

    public function cancelComplete($id)
    {
        $this->modelDaftarOrder->where('id', $id)->set('isCancel', 1)->update();
        return redirect()->to('/admin/halaman_order_cancel');
    }
}
