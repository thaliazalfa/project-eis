<?php

namespace App\Controllers;
use App\Models\DanaDaruratModel;

class Coba extends BaseController
{

    public function __construct(){
        $this->danaDaruratModel = new DanaDaruratModel();
    }

    public function index()
    {
        //$dana_darurat = $this->danaDaruratModel->findAll();

        $data = [
            "dana_darurat" => $this->danaDaruratModel->getDetail()
        ];

        echo view('/pages/history', $data);
    }

    public function detail($bulan)
    {
        $data = [
            "detail" => $this->danaDaruratModel->getDetail($bulan)
        ];
       //jika data tidak ada di tabel
       if(empty($data['detail'])){
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $bulan . ' tidak ditemukan');
       }
       
        return view ('/detail/index', $data);
    }

    public function create()
    {
        $data = [

        ];
        return view ('/pages/new', $data);
    }

    public function save()
    {
       $data = [

            'pengeluaran_tetap' => (int) $this->request->getPost('pengeluaran_tetap'),
            'pengeluaran_tambahan' => (int) $this->request->getPost('pengeluaran_tambahan'),
            'bulan' => $this->request->getPost('bulan'),
            'dana_darurat' => $this->request->getPost('dana_darurat'),


        ];
        $this->danaDaruratModel->insert($data);
        return redirect()->to('/pages/history'); 
    }
}
