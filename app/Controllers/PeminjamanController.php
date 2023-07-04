<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
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
        $anggotaModel = new AnggotaModel();
        
        $buku = $bukuModel->findAll();
        $anggota = $anggotaModel->findAll();
    
        return view('peminjaman/form_input', [
            'buku' => $buku,
            'anggota' => $anggota
        ]);
    }

    public function proses()
    {
        $bk = new PeminjamanModel();
        $bk->insert($this->request->getPost());
        return redirect()->to(base_url('peminjaman'));
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
        $anggotaModel = new AnggotaModel();
        $peminjamanModel = new PeminjamanModel();
        $xp = $peminjamanModel->find($id);
        
        $buku = $bukuModel->findAll();
        $anggota = $anggotaModel->findAll();
        $peminjaman = $peminjamanModel->findAll();
    
        return view('peminjaman/form_edit', [
            'buku' => $buku,
            'anggota' => $anggota,
            'peminjaman' => $peminjaman,
            'xp' => $xp
        ]);
        
    }

    public function edit_data()
    {
        $bk = new PeminjamanModel();
        $bk->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('peminjaman'));
    }

    public function delete_data($id = false)
    {
        $bk = new PeminjamanModel();
        $bk->delete($id);
        return redirect()->to(base_url('peminjaman'));
    }

    // public function delete($id = false)
    // {
    //     $bk = new PeminjamanModel();
    //     $bk->delete($id);
    //     return redirect()->to(base_url());
    // }
}
