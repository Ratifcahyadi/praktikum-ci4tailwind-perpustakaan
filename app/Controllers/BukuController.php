<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    public function buku()
    {
        $bukuModel = new BukuModel();
        $dataBuku = $bukuModel->findAll();
        return View('dashboard/index', ['dataBuku' => $dataBuku]);
    }

    // public function view($id = false)
    // {
    //     $bk = new BukuModel();
    //     $xp = $bk->find($id);
    //     return View('dashboard_home', ['xp' => $xp]);
    // }

    public function add()
    {
        return View('buku/form_input');
    }

    public function proses()
    {
        $bk = new BukuModel();
        $bk->insert($this->request->getPost());
        return redirect()->to(base_url('buku'));
    }

    // public function edit($id)
    // {
    //     $bk = new BukuModel();
    //     $data_semester['data_semester'] = $bk->find($id);
    //     return view('form_edit', $data_semester);
    // }

    public function edit($id = false)
    {
        $bk = new BukuModel();
        $xp = $bk->find($id);
        return view('buku/form_edit', ['xp' => $xp]);
    }

    public function edit_data()
    {
        $bk = new BukuModel();
        $bk->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('buku'));
    }

    public function delete_data($id = false)
    {
        $bk = new BukuModel();
        $bk->delete($id);
        return redirect()->to(base_url('buku'));
    }

    // public function delete($id = false)
    // {
    //     $bk = new BukuModel();
    //     $bk->delete($id);
    //     return redirect()->to(base_url());
    // }
}
