<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\TreatmentModel;
use App\Models\OrderanModel;

class Home extends BaseController
{

    public function index()
    {
        $treatment = new TreatmentModel();
        $data = $treatment->getTreatment();
        return view('pages/home', compact('data'));
    }

    public function login()
    {
        $AdminModel = new \App\Models\AdminModel();
        $login = $this->request->getVar('login');
        if($login){
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            if($username == '' or $password == ''){
                $err = "Silahkan masukkan username dan password";
            }
            if($err){
                session()->setFlashdata('error', $err);
                return redirect()->to("pages/login");
            }
        }
        return view('pages/login');
    }

    public function register(){
        return view('pages/register');
    }


    public function book(){
        // $orderanmodel = new OrderanModel();
        // $order = $orderanmodel->findAll();
        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->OrderanModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'nomor_handphone' => $this->request->getVar('nomor_handphone'),
            'id_jenis_treatment' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'total_harga' => $this->request->getVar('total_harga')
        ]);

        // dd($this->request->getVar('nama'));
        return redirect()->to('/home');
    }

    

    // public function viewTreatment($slug)
	// {
	// 	$treatment = new TreatmentModel();
	// 	$data['treatment'] = $treatment->where([
	// 		'slug' => $slug,
	// 		'status' => 'published'
	// 	])->findAll();

    //     // tampilkan 404 error jika data tidak ditemukan
	// 	// if (!$data['treatment']) {
	// 	// 	throw PageNotFoundException::forPageNotFound();
	// 	// }

	// 	echo view('news_detail', $data);
	// }
    
}
