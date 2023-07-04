<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM INPUT PENGEMBALIAN AMIKOM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

</head>

<body class="bg-slate-800 min-h-screen ">
    <div class="bg-primary py-3 flex justify-center">
        <div class="mx-auto">
            <h1 class="text-xl text-white font-bold text-center ">Form Pengisian Pengembalian Buku Perpustakaan</h1>
            <p class="text-white text-center">-- Universitas AMIKOM Yogyakarta --</p>
        </div>
    </div>

    <a href="<?php echo base_url('pengembalian'); ?>">
        <button class="btn border-t-green-500 btn-info rounded-full my-2 mx-5 gap-1 font-bold sm:font-normal sm:gap-0 text-white shadow-xl">
            <i class='bx bx-left-arrow-alt bx-md '></i>Kembali</button>
    </a>
    <!-- Dashboard RPS -->
    <form action="<?= base_url('proses_add_pengembalian') ?>" method="POST" class="flex justify-center items-center ">

        <div class="card w-96 shadow-xl bg-slate-700 ">
            <div class="w-96 p-6 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-2xl w-auto max-w-sm">
                    Data Pengembalian</h2>

                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Nama Pengembalian</span>
                    </label>
                    <select id="nama" name="nama" class="select select-warning w-full max-w-xs">
                        <option value="">--Pilih Nama Pengembalian--</option>
                        <?php foreach ($pengembalian as $agg) : ?>
                            <option value="<?= $agg['nama'] ?>"><?= $agg['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">judul Buku</span>
                    </label>
                    <select id="judul_buku" name="judul_buku" class="select select-warning w-full max-w-xs">
                        <option value="">--Pilih Judul Buku--</option>
                        <?php foreach ($pengembalian as $bk) : ?>
                            <option value="<?= $bk['judul_buku'] ?>"><?= $bk['judul_buku'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-l text-white">Tanggal Pengembalian</span>
                    </label>
                    <input id="tanggal_pengembalian" name="tanggal_pengembalian" type="date" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" required />
                </div>
                <div class="flex items-center justify-end py-3 gap-3 w-auto">
                    <button href="" type="submit" class="btn btn-success w-full" id="tombolSimpan" onclick="validateForm()">Save</button>
                </div>
            </div>
        </div>

    </form>
    <script>
        function validateForm() {
            const tanggalPengembalianInput = document.getElementById('tanggal_pengembalian');
            const tanggalPengembalianValue = tanggalPengembalianInput.value;
            const isValidDate = new Date(tanggalPengembalianValue).toString() !== 'Invalid Date';

            if (!isValidDate) {
                alert('Tanggal Pengembalian tidak valid. Silakan pilih tanggal yang benar.');
                tanggalPengembalianInput.focus();
                return false;
            }

            // If the date is valid, you can proceed with form submission
        }
    </script>

</body>

</html>