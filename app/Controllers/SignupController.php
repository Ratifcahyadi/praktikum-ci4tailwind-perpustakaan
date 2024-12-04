<?php
// Bagian/Controller/SignupController.php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\Services;

class SignupController extends BaseController
{
    public function register()
    {
        // echo view('header');
        echo view('signup_form');
        // echo view('footer');
    }

    public function signup() {

        $validation = Services::validation();

        $validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'agreement' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // proses penyimpanan data ke database atau tindakan lainnya

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $AdminModel = new AdminModel();
        $AdminModel->insert($data);

        return redirect()->to(base_url(''));
    }

    // public function success() {
    //     // return view('signup_success');
    //     return view('login_form');
    // }
}
