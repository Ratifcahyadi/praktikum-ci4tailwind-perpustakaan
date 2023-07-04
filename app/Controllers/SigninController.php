<?php
// Bagian Controller/SigninController.php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class SigninController extends BaseController
{
    public function index() {
        return view('login_form');
    }

    public function login() {
        // Cari pengguna berdasarkan nama
        $userModel = new AdminModel();
        $nama = $this->request->getVar('nama');
        $password = $this->request->getVar('password');

        // Mengambil data pengguna berdasarkan nama
        $user = $userModel->where('nama', $nama)->first();
        
        // if ($user) {
        //     return redirect('dashboard_home');
        // }

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Login berhasil
                return redirect()->to('/dashboard');
                // Simpan informasi login ke session
                $userData = [
                    'isLoggedIn' => true,
                    'nama' => $user['nama']
                ];
                // session()->set($data);
                session()->set('userData', $userData);
                return redirect()->to(base_url('dashboard'));
            }
        }
    }

    public function logout()
    {
        return redirect()->to(base_url());
    }
}
