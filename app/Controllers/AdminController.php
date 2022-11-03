<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function login()
    {
        return view('pages/login');
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
        return view('admin/halaman_treatment_page');
    }

    public function halaman_daftar_order()
    {
        // echo "Halaman Treatment";
        return view('admin/halaman_daftar_order_page');
    }
}
