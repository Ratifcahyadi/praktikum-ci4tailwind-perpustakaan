<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;

class SideController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard()
    {
        $adminModel = new AdminModel();
        $anggotaModel = new AnggotaModel();
        $bukuModel = new BukuModel();
        $kategoriModel = new KategoriModel();
        
        $admin = $adminModel->findAll();
        $anggota = $anggotaModel->findAll();
        $buku = $bukuModel->findAll();
        $kategori = $kategoriModel->findAll();
    
        return view('dashboard/index', [
            'anggota' => $anggota,
            'admin' => $admin,
            'buku' => $buku,
            'kategori' => $kategori
        ]);
    }
    
    
    public function admin()
    {
        $admin = new AdminModel();
        $data = $admin->findAll();
        return View('dashboard/admin', ['data' => $data]);
    }
    
    public function anggota()
    {
        $anggota = new AnggotaModel();
        $data = $anggota->findAll();
        return View('dashboard/anggota', ['data' => $data]);
    }
    
    public function buku()
    {
        $bk = new BukuModel();
        $data = $bk->findAll();
        return View('dashboard/buku', ['data' => $data]);

    }
    
    public function kategori()
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->findAll();
    
        return view('dashboard/kategori', [
            'kategori' => $kategori
        ]);
    }
    
    public function peminjaman()
    {
        $PeminjamanModel = new PeminjamanModel();
        $peminjaman = $PeminjamanModel->findAll();
    
        return view('dashboard/peminjaman', [
            'peminjaman' => $peminjaman
        ]);
    }
    
    public function pengembalian()
    {
        $PengembalianModel = new PengembalianModel();
        $pengembalian = $PengembalianModel->findAll();
    
        return view('dashboard/pengembalian', [
            'pengembalian' => $pengembalian
        ]);
    }
    
}
