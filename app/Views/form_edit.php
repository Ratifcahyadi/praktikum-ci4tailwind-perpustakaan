<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM INPUT RPS AMIKOM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

</head>

<body class="bg-slate-800 min-h-screen ">
    <div class="bg-primary py-3 flex justify-center">
        
        <div class="mx-auto">
            <h1 class="text-xl text-white font-bold text-center ">Form Pengisian Anggota Perpustakaan</h1>
            <p class="text-white text-center">-- Universitas AMIKOM Yogyakarta --</p>
        </div>
    </div>

    <a href="<?php echo base_url(); ?>">
    <button class="btn border-t-green-500 btn-info rounded-full my-2 mx-5 gap-1 font-bold sm:font-normal sm:gap-0 text-white shadow-xl">
    <i class='bx bx-left-arrow-alt bx-md '></i>Dashboard</button>
    </a>
    <!-- Dashboard RPS -->
    <form action="<?= base_url('proses_edit') ?>" method="POST" class="flex justify-center items-center ">
        <div class="card w-96 shadow-xl bg-slate-700 ">
            <div class="w-96 p-6 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-2xl w-auto max-w-sm">
                    Data Anggota</h2>
                <input id="id" name="id" type="hidden" value="<?= $xp->id ?>" placeholder="Type here" class="input input-bordered w-full shadow-l focus:ring-2 focus:ring-yellow-400" />
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Nama</span>
                    </label>
                    <input id="nama" name="nama" value="<?= $xp->nama ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-l focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">NIM</span>
                    </label>
                    <input id="nim" name="nim" value="<?= $xp->nim ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-l focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Prodi</span>
                    </label>
                    <input id="prodi" name="prodi" value="<?= $xp->prodi ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                
                <div class="flex items-center justify-end py-3 gap-3 w-auto">
                    <button type="submit" class="btn btn-success w-full" >Edit OK</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>