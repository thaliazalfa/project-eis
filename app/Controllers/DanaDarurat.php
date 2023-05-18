<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\DanaDaruratModel;

class DanaDarurat extends ResourceController
{
    public function __construct(){
        $this->danaDaruratModel = new DanaDaruratModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $dana_darurat = $this->danaDaruratModel->findAll();

        $payload = [
            "dana_darurat" => $dana_darurat
        ];

        echo view('/pages/dana-darurat/history', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('pages/dana-darurat/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "bulan" => $this->request->getPost('bulan'),
            "pengeluaran_tetap" => (int) $this->request->getPost('pengeluaran_tetap'),
            "pengeluaran_tambahan" => (int) $this->request->getPost('pengeluaran_tambahan'),
            "dana_darurat" => (int) $this->request->getPost('dana_darurat'),
        ];


        $this->danaDaruratModel->insert($payload);
        return redirect()->to('pages/dana-darurat/');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $emergency_fund = $this->danaDaruratModel->find($id);
        
        if (!$emergency_fund) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('/pages/dana-darurat/edit', ["data" => $emergency_fund]);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            "bulan" => $this->request->getPost('bulan'),
            "pengeluaran_tetap" => (int) $this->request->getPost('pengeluaran_tetap'),
            "pengeluaran_tambahan" => (int) $this->request->getPost('pengeluaran_tambahan'),
            "dana_darurat" => (int) $this->request->getPost('dana_darurat'),
        ];

        $this->danaDaruratModel->update($id, $payload);
        return redirect()->to('pages/dana-darurat/');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->danaDaruratModel->delete($id);
        return redirect()->to('pages/dana-darurat/');
    }
}
