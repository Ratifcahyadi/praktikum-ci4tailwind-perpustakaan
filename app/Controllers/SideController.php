<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class SideController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard()
    {
        return view('dashboard/index');
    }
    
    public function admin()
    {
        return view('dashboard/admin');
    }
    
    public function anggota()
    {
        $sm = new AnggotaModel();
        $anggota_data = $sm->findAll();
        return View('dashboard/anggota', ['anggota_data' => $anggota_data]);
    }
    
    public function buku()
    {
        return view('dashboard/buku');
    }
    
    public function kategori()
    {
        return view('dashboard/kategori');
    }
    
    public function peminjaman()
    {
        return view('dashboard/peminjaman');
    }
    
    public function pengembalian()
    {
        return view('dashboard/pengembalian');
    }
    
}
