<?php

namespace App\Controllers;

use App\Models\DaftarOrder;
use App\Models\Mahasiswa;
use App\Models\TreatmentModel;
use App\Models\OrderanModel;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        $this->session = service('session');
        $this->auth   = service('authentication');
        $this->treatmentModel = new TreatmentModel();
        $this->daftarOrder = new DaftarOrder();
    }

    public function store(){
        $treatment = $this->treatmentModel->where('id', $this->request->getVar('jenis_treatment'))->first();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nomor_handphone' => $this->request->getVar('nomor_handphone'),
            'id_jenis_treatment' => $this->request->getVar('jenis_treatment'),
            'tanggal' => $this->request->getVar('tanggal'),
            'total_harga' => $treatment['harga'],
        ];
        $this->daftarOrder->insert($data);
        return redirect()->to('/home');
    }
    public function index()
    {
        $data = [
            'data' => $this->treatmentModel->findall()
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('pages/login', $data);
    }
    
    public function logout()
    {
        if ($this->auth->check()) {
            $this->auth->logout();
        }

        return redirect()->to(site_url('/'));
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
