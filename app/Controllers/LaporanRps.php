<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LaporanRps extends BaseController
{
    public function index()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i <100 ; $i++) { 
            $penulis[] = [
                'nama' => $faker->name(),
                'no_telp' => $faker->phoneNumber(),
                'alamat' => $faker->address(),
                'email' => $faker->email(),
            ];
        }
        $data['penulis'] = $penulis;
        return view('halaman_rps/template_rps', $data);
    }
}
