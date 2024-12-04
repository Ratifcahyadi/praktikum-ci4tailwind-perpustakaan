<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    // public function buku()
    // {
    //     $kategoriModel = new KategoriModel();
    //     $dataKategori = $kategoriModel->findAll();
    //     return View('dashboard/kategori', ['dataKategori' => $dataKategori]);
    // }

    // public function view($id = false)
    // {
    //     $bk = new KategoriModel();
    //     $xp = $bk->find($id);
    //     return View('dashboard_home', ['xp' => $xp]);
    // }

    public function add()
    {
        
        $bukuModel = new BukuModel();
        $kategoriModel = new KategoriModel();
        
        $buku = $bukuModel->findAll();
        $kategori = $kategoriModel->findAll();
    
        return view('kategori/form_input', [
            'buku' => $buku,
            'kategori' => $kategori
        ]);
    }

    public function proses()
    {
        $bk = new KategoriModel();
        $bk->insert($this->request->getPost());
        return redirect()->to(base_url('kategori'));
    }

    // public function edit($id)
    // {
    //     $bk = new KategoriModel();
    //     $data_semester['data_semester'] = $bk->find($id);
    //     return view('form_edit', $data_semester);
    // }

    public function edit($id = false)
    {
        $bukuModel = new BukuModel();
        $kategoriModel = new KategoriModel();
        $xp = $kategoriModel->find($id);
        
        $buku = $bukuModel->findAll();
        $kategori = $kategoriModel->findAll();
    
        return view('kategori/form_edit', [
            'buku' => $buku,
            'kategori' => $kategori,
            'xp' => $xp
        ]);
        
    }

    public function edit_data()
    {
        $bk = new KategoriModel();
        $bk->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('kategori'));
    }

    public function delete_data($id = false)
    {
        $bk = new KategoriModel();
        $bk->delete($id);
        return redirect()->to(base_url('kategori'));
    }

    // public function delete($id = false)
    // {
    //     $bk = new KategoriModel();
    //     $bk->delete($id);
    //     return redirect()->to(base_url());
    // }
}
