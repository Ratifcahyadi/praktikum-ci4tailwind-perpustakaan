<?php
// Bagian Views/dashboard/peminjaman.php

// Load header
include('header.php');
?>

<!-- Tambahkan konten body di sini -->
<div class="container">
    <div class="sidebar" id="sidebar">
        <?php include('sidebar.php') ?>
    </div>
    <div class="content" id="content">
        <style>
            .content {
                max-width: 100%;
                padding: 0 2%;
                /* margin: 0 2%; */
                box-sizing: border-box;
            }

            h2 {
                font-size: 3vw;
                text-align: center;
            }

            p {
                font-size: 2vw;
            }

            @media (max-width: 768px) {
                h2 {
                    font-size: 4vw;
                }

                p {
                    font-size: 3vw;
                }
            }
        </style>

        <div class="content">
            <h2>Peminjaman</h2>
            <p>Ini adalah halaman peminjaman perpustakaan</p>

            <!-- view hasil -->
            <div class="flex justify-end">
                <a href="/input_peminjaman" class="btn btn-warning mb-4 font-semibold rounded-full">+ Tambah Peminjam</a>
            </div>
            <div class="card">
                <div class="">
                    <table class="table table-zebra w-full mb-4">
                        <!-- head -->
                        <thead>
                            <t>
                                <th class="bg-rose-400 text-white">No.</th>
                                <th class="bg-rose-400 text-white">Nama</th>
                                <th class="bg-rose-400 text-white">Judul Buku</th>
                                <th class="bg-rose-400 text-white">Tanggal Pinjam</th>
                                <th class="bg-rose-400 text-white">Lama Pinjam</th>
                                <th class="bg-rose-400 text-white"></th>
                                </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <?php
                            $nomor = 1;
                            function bulanIndonesia($bulan)
                            {
                                $nama_bulan = array(
                                    1 => 'Januari',
                                    2 => 'Februari',
                                    3 => 'Maret',
                                    4 => 'April',
                                    5 => 'Mei',
                                    6 => 'Juni',
                                    7 => 'Juli',
                                    8 => 'Agustus',
                                    9 => 'September',
                                    10 => 'Oktober',
                                    11 => 'November',
                                    12 => 'Desember'
                                );

                                return $nama_bulan[(int)$bulan];
                            }

                            // Define the konversiTanggal() function separately
                            function konversiTanggal($timestamp)
                            {
                                $tanggal = date("d", strtotime($timestamp));
                                $bulan = date("n", strtotime($timestamp));
                                $tahun = date("Y", strtotime($timestamp));

                                return $tanggal . ' ' . bulanIndonesia($bulan) . ' ' . $tahun;
                            }

                            foreach ($peminjaman as $data) : ?>
                                <?php
                                // $timestamp = $data['waktu_pinjam'];
                                // $date = date("d F Y", strtotime($timestamp));
                                $timestamp = $data['waktu_pinjam'];
                                $date = konversiTanggal($timestamp);

                                ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $date ?></td>
                                    <td><?= $data['lama_pinjam'] ?></td>
                                    <td>
                                        <div class="card-actions justify-end">
                                            <a href="<?= base_url('edit_peminjaman') . '/' . $data['id'] ?>" class="btn btn-outline btn-success font-semibold text-white">Edit</a>
                                            <a href="<?= base_url('hapus_peminjaman') . '/' . $data['id'] ?>" class="btn btn-outline btn-danger font-semibold text-white">Delete</a>
                                    </td>
                                <?php endforeach ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
?>