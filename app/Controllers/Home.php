<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\TreatmentModel;

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
        return view('pages/login');
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
