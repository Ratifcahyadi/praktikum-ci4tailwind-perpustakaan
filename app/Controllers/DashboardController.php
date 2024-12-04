<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use TCPDF;
use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\BukuModel;

class DashboardController extends BaseController
{

    public function index()
    {
        $admin = new AdminModel();
        $data = $admin->findAll();
        return View('dashboard/index', ['data' => $data]);
    }

    public function buku()
    {
        $adminModel = new BukuModel();
        $dataBuku = $adminModel->findAll();
        return View('dashboard/innex', ['dataBuku' => $dataBuku]);
    }
}
