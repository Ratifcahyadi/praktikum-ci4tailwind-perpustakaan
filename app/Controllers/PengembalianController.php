<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;

class PengembalianController extends BaseController
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
        $pengembalianModel = new PeminjamanModel();
        
        $buku = $bukuModel->findAll();
        $pengembalian = $pengembalianModel->findAll();
    
        return view('pengembalian/form_input', [
            'buku' => $buku,
            'pengembalian' => $pengembalian
        ]);
    }

    public function proses()
    {
        $bk = new PengembalianModel();
        $bk->insert($this->request->getPost());
        return redirect()->to(base_url('pengembalian'));
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
        $PengembalianModel = new PengembalianModel();
        $xp = $PengembalianModel->find($id);
        
        $buku = $bukuModel->findAll();
        $pengembalian = $PengembalianModel->findAll();
    
        return view('pengembalian/form_edit', [
            'buku' => $buku,
            'pengembalian' => $pengembalian,
            'xp' => $xp
        ]);
    }

    public function edit_data()
    {
        $bk = new PengembalianModel();
        $bk->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('pengembalian'));
    }

    public function delete_data($id = false)
    {
        $bk = new PengembalianModel();
        $bk->delete($id);
        return redirect()->to(base_url('pengembalian'));
    }

    // public function delete($id = false)
    // {
    //     $bk = new PengembalianModel();
    //     $bk->delete($id);
    //     return redirect()->to(base_url());
    // }
}
