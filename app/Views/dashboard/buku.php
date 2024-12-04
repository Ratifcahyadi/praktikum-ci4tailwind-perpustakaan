<?php

// Bagian Views/dashboard/buku.php
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
            <h2>Buku</h2>
            <p>Ini adalah halaman buku perpustakaan</p>

            <!-- view hasil -->
            <div class="flex justify-end">
                <a href="/input_buku" class="btn btn-warning mb-4 font-semibold rounded-full">+ Tambah Buku</a>
            </div>
            <div class="card">
                <div class="">
                    <table class="table table-zebra w-full mb-4">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="bg-orange-400 text-white">No.</th>
                                <th class="bg-orange-400 text-white">Kode Buku</th>
                                <th class="bg-orange-400 text-white">Judul buku</th>
                                <th class="bg-orange-400 text-white"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <?php
                            $nomor = 1;
                            foreach ($data as $buku) : ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $buku['kode_buku'] ?></td>
                                    <td><?= $buku['judul_buku'] ?></td>
                                    <td>
                                        <div class="card-actions justify-end">
                                            <a href="<?= base_url('edit_buku') . '/' . $buku['id'] ?>" class="btn btn-outline btn-success font-semibold text-white">Edit</a>
                                            <a href="<?= base_url('hapus_buku') . '/' . $buku['id'] ?>" class="btn btn-outline btn-danger font-semibold text-white">Delete</a>
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