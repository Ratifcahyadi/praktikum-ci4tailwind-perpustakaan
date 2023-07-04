<?php
// Bagian/Views/dashboard/anggota.php

// Load header
include('header.php');
?>

<!-- Tambahkan konten body di sini -->
<link rel="stylesheet" href="/css/app.css">

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
            <h2>Anggota</h2>
            <p>Ini adalah halaman angggota perpustakaan</p>

            <!-- view hasil -->
            <div class="flex justify-end">
                <a href="/input_anggota" class="btn btn-warning mb-4 font-semibold rounded-full">+ Tambah Anggota</a>
            </div>
            <div class="card">
                <div class="">
                    <table class="table table-zebra w-full mb-4">
                        <!-- head -->
                        <thead>
                            <t>
                                <th class="bg-secondary text-white">No.</th>
                                <th class="bg-secondary text-white">Nama</th>
                                <th class="bg-secondary text-white">NIM</th>
                                <th class="bg-secondary text-white">Prodi</th>
                                <th class="bg-secondary text-white"></th>
                                </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <?php
                            $nomor = 1;
                            foreach ($data as $anggota) : ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $anggota->nama ?></td>
                                    <td><?= $anggota->nim ?></td>
                                    <td><?= $anggota->prodi ?></td>
                                    <td>
                                        <div class="card-actions justify-end">
                                            <a href="<?= base_url('edit_anggota') . '/' . $anggota->id ?>" class="btn btn-outline btn-success font-semibold text-white">Edit</a>
                                            <a href="<?= base_url('hapus_anggota') . '/' . $anggota->id ?>" class="btn btn-outline btn-danger font-semibold text-white">Delete</a>
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
<?php
include('footer.php');
?>