<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM EDIT PEMINJAMAN PERPUSTAKAAN AMIKOM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

</head>

<body class="bg-slate-800 min-h-screen ">
    <div class="bg-primary py-3 flex justify-center">

        <div class="mx-auto">
            <h1 class="text-xl text-white font-bold text-center ">Form Edit Pengisian Peminjaman Buku Perpustakaan</h1>
            <p class="text-white text-center">-- Universitas AMIKOM Yogyakarta --</p>
        </div>
    </div>

    <a href="<?php echo base_url('peminjaman'); ?>">
        <button class="btn border-t-green-500 btn-info rounded-full my-2 mx-5 gap-1 font-bold sm:font-normal sm:gap-0 text-white shadow-xl">
            <i class='bx bx-left-arrow-alt bx-md '></i>Dashboard</button>
    </a>
    <!-- Dashboard RPS -->
    <form action="<?= base_url('proses_edit_peminjaman') ?>" method="POST" class="flex justify-center items-center ">
        <div class="card w-96 shadow-xl bg-slate-700 ">
            <div class="w-96 p-6 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-2xl w-auto max-w-sm">
                    Data Peminjaman</h2>
                <input id="id" name="id" type="hidden" value="<?= $xp['id'] ?>" placeholder="Type here" class="input input-bordered w-full shadow-l focus:ring-2 focus:ring-yellow-400" />
                
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Nama Peminjam</span>
                    </label>
                    <select id="nama" name="nama" class="select select-warning w-full max-w-xs">
                        <?php foreach ($peminjaman as $agg) : ?>
                        <?php $selected = (isset($nama) && $agg['nama'] == $nama) ? 'selected' : ''; ?>
                            <option value="<?= $agg['nama'] ?>" <?= $selected ?>>
                                <?= $agg['nama'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Judul Buku</span>
                    </label>
                    <select id="judul_buku" name="judul_buku" class="select select-warning w-full max-w-xs">
                        <?php foreach ($peminjaman as $bk) : ?>
                            <?php $selected = (isset($judul_buku) && $bk['judul_buku'] == $judul_buku) ? 'selected' : ''; ?>
                            <option value="<?= $bk['judul_buku'] ?>" <?= $selected ?>>
                                <?= $bk['judul_buku'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Lama Peminjaman</span>
                    </label>
                    <input id="lama_pinjam" name="lama_pinjam" type="text" value="<?= $xp['lama_pinjam']?>" placeholder="contoh: xx hari" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full">
                        <label class="label-text text-l flex justify-center text-error m-2">Tanggal Peminjaman Sudah Terisi Diawal</label>
                </div>

                <div class="flex items-center justify-end py-3 gap-3 w-auto">
                    <button type="submit" class="btn btn-success w-full">Edit OK</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>