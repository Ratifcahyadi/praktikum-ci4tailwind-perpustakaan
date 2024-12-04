<!-- Bagian Views/dashboard/body.php -->
<style>
    .content {
        max-width: 100%;
        padding: 0 2%;
        margin: 0 2%;
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
<link rel="stylesheet" href="/css/app.css">
<div class="container">
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
            <h2>Dashboard</h2>
            <p>Ini adalah halaman dashboard perpustakaan</p>
            <div class="flex row-auto justify-between gap-2 mt-2">
                <div class="w-[250px]">
                    <?php $jumlahAdmin = count($admin); ?>
                    <div class="card w-30 bg-indigo-500 text-primary-content">
                        <div class="card-body">
                            <h2 class="card-title">Jumlah Admin</h2>
                            <div class="badge badge-accent">
                                <?= $jumlahAdmin ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[250px]">
                    <?php $jumlahAnggota = count($anggota); ?>
                    <div class="card w-30 bg-yellow-500 text-primary-content">
                        <div class="card-body">
                            <h2 class="card-title">Jumlah Anggota</h2>
                            <div class="badge badge-secondary">
                                <?= $jumlahAnggota ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[250px]">
                <?php $jumlahBuku = count($buku); ?>
                        <div class="card w-30 bg-emerald-500 text-primary-content">
                            <div class="card-body">
                                <h2 class="card-title">Jumlah Buku</h2>
                                <div class="badge badge-primary">
                                    <?= $jumlahBuku ?>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="w-[250px]">
                <?php $jumlahKtegori = count($kategori); ?>
                        <div class="card w-30 bg-rose-500 text-primary-content">
                            <div class="card-body">
                                <h2 class="card-title">Jumlah Kategori</h2>
                                <div class="badge badge-warning">
                                <?= $jumlahKtegori ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>