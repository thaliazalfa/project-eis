<?php

namespace App\Controllers;
use App\Models\DanaDaruratModel;


class DanaDarurat extends BaseController
{
    //Deklarasi function construct
    public function __construct(){
        $this->danaDaruratModel = new DanaDaruratModel();
    }


    //Method Index()
    public function index()
    {
        //$dana_darurat = $this->danaDaruratModel->findAll();

        $data = [
            "dana_darurat" => $this->danaDaruratModel->getDetail()
        ];

        echo view('/pages/history', $data);
    }

    
    //Method create
    public function create()
    {
        //$session = \Config\Services::session();
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view ('/pages/new', $data);
    }
    


    //Method save()
    public function save()
    {
        
        //validasi input
        
        if(!$this->validate([
            'pengeluaran_tetap' => [
                'rules' => 'required|numeric|greater_than[0]',
                'errors'=> [
                    'required' => '{field} pengeluaran tetap harus diisi.',
                    'numeric' => '{field} input harus angka.',
                    'greater_than[0]' => '{field} input harus lebih besar dari 0'
                ],
            ],
            'pengeluaran_tambahan' => [
                'rules' => 'required|numeric',
                'errors'=> [
                    'required' => '{field} pengeluaran tetap harus diisi.',
                    'numeric' => '{field} input harus angka.'
                    ]
            ]
            ])){
                $validation = \Config\Services::validation();
                        
                    return redirect()->to('/pages/new')->withInput()->with('validation', $validation);
                }
                    

        //hitung dana darurat
        
        $pengeluaran_tetap = (int) $this->request->getPost('pengeluaran_tetap');
        $pengeluaran_tambahan = (int) $this->request->getPost('pengeluaran_tambahan');
        $status = $this->request->getPost('status');
        $dana_darurat = '';
                    
        switch ($status){
            case $status == 'Lajang' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*3;
                break;
            case $status == 'Menikah' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*4;
                break;
            case $status == 'Menikah dan Punya Anak' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*6;
                break;
                }
        
        //Insert atau simpan input dan hasil hitungan ke database        
        $this->danaDaruratModel->save([
            'pengeluaran_tetap' => (int) $this->request->getVar('pengeluaran_tetap'),
            'pengeluaran_tambahan' => (int) $this->request->getVar('pengeluaran_tambahan'),
            'bulan' => $this->request->getVar('bulan'),
            'status' => $this->request->getVar('status'),
            'dana_darurat' => $dana_darurat,
            ]);
                
                session()->setFlashdata('message', 'Data berhasil ditambahkan.');
                return redirect()->to('/pages/history'); 
            }



    //Method detail()
    public function detail()
    {
        $detail = $this->danaDaruratModel->findAll();
        $data = [
                "detail" => $detail
                ];

        //jika data tidak ada di tabel
        if(empty($data['detail'])){
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
            }
             return view ('/detail/index', $data);
    }


    //Method delete()
    public function delete($id)
    {
        $this->danaDaruratModel->delete($id);
        session()->setFlashdata('message', 'Data berhasil dihapus');
        return redirect()->to('/pages/history');
    }


    //Method edit()
    public function edit($id)
    {
        //$session = \Config\Services::session();
        session();
        $data = [
                    'validation' => \Config\Services::validation(),
                    'detail' => $this->danaDaruratModel->getDetail($id)
                ];
        return view ('/pages/edit', $data);
    }


    //Method update()
    public function update($id)
    {

        //Validasi input
        if(!$this->validate([
            'pengeluaran_tetap' => [
                    'rules' => 'required|numeric|greater_than[0]',
                    'errors'=> [
                        'required' => '{field} pengeluaran tetap harus diisi.',
                        'numeric' => '{field} input harus angka.',
                        'greater_than[0]' => '{field} input harus lebih besar dari 0'
                    ],
            ],
            'pengeluaran_tambahan' => [
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} pengeluaran tetap harus diisi.',
                        'numeric' => '{field} input harus angka.'
                    ]
            ]
        ])){
                $validation = \Config\Services::validation();
                return redirect()->to('/pages/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
            }
                            

        //hitung dana darurat
        $pengeluaran_tetap = (int) $this->request->getPost('pengeluaran_tetap');
        $pengeluaran_tambahan = (int) $this->request->getPost('pengeluaran_tambahan');
        $status = $this->request->getPost('status');
        $dana_darurat = '';
                            
        switch ($status){
            case $status == 'Lajang' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*3;
                break;
            case $status == 'Menikah' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*4;
                break;
            case $status == 'Menikah dan Punya Anak' :
                $dana_darurat = ($pengeluaran_tetap+$pengeluaran_tambahan)*6;
                break;
        }
        
        //Inisialisasi variabel yang sudah diubah
        $detail = [
            'pengeluaran_tetap' => (int) $this->request->getVar('pengeluaran_tetap'),
            'pengeluaran_tambahan' => (int) $this->request->getVar('pengeluaran_tambahan'),
            'bulan' => $this->request->getVar('bulan'),
            'status' => $this->request->getVar('status'),
            'dana_darurat' => $dana_darurat
        ];

        //Kirim data dan flash message ke view history 
        $this->danaDaruratModel->update($id, $detail);
        session()->setFlashdata('message', 'Data berhasil diubah.');
        return redirect()->to('/pages/history');
    }
}
        