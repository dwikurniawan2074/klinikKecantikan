<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        return view('admin/halaman_treatment_page', compact('data'));
    }

    public function halaman_daftar_order()
    {
        // echo "Halaman Treatment";
        return view('admin/halaman_daftar_order_page');
    }

    public function halaman_order_complete()
    {
        // echo "Halaman Treatment";
        return view('admin/halaman_order_complete_page');
    }

    public function halaman_order_cancel()
    {
        // echo "Halaman Treatment";
        return view('admin/halaman_order_cancel_page');
    }

    public function halaman_kritik_saran()
    {
        // echo "Halaman Treatment";
        return view('admin/halaman_kritik_saran_page');
    }
}
