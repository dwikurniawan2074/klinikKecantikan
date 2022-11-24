<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarOrder;
use App\Models\KritikSaranModel;
use App\Models\TreatmentModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function dashboard()
    {
        return view('admin/dashboard_page');
    }

    public function halaman_admin()
    {
        // echo "Halaman Admin";
        $data = [
            'title'=>'halaman admin'
        ];

        return view('admin/halaman_admin_page', $data);
    }

    public function halaman_treatment()
    {
        // echo "Halaman Treatment";
        $treatment = new TreatmentModel();
        $data = $treatment->getTreatment();
        $data = [
            'form' => null,
            'data' => $data
        ];
        if($this->request->getVar('id')){
            $id = $this->request->getVar('id');
            $data['form'] = $treatment->getTreatment($id);
            return view('admin/halaman_treatment_page', $data);
        }else{
            return view('admin/halaman_treatment_page', $data);
        }
    }

    public function halaman_daftar_order()
    {
        // echo "Halaman Treatment";
        $data = [
            'daftar' => (new DaftarOrder())->where(['isComplete' => 0, 'isCancel' => 0])->findAll()
        ];
        return view('admin/halaman_daftar_order_page',$data);
    }

    public function halaman_order_complete()
    {
        // echo "Halaman Treatment";
        $data = [
            'daftar' => (new DaftarOrder())->where(['isComplete' => 1])->findAll()
        ];
        return view('admin/halaman_order_complete_page',$data);
    }

    public function halaman_order_cancel()
    {
        // echo "Halaman Treatment";
        $data = [
            'daftar' => (new DaftarOrder())->where(['isCancel' => 1])->findAll()
        ];
        return view('admin/halaman_order_cancel_page',$data);
    }

    public function halaman_kritik_saran()
    {
        // echo "Halaman Treatment";
        $data = [
            'kritik_saran' => (new KritikSaranModel())->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/halaman_kritik_saran_page', $data);
    }
}
