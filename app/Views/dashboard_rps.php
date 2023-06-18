<!DOCTYPE html>
<html lang="en" data-theme="">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Dashboard RPS!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="min-h-screen bg-slate-800  justify-center items-center w-full">
        <div class="navbar bg-violet-600 p-1 ">
            <div class="flex-1">
                <a class="container w-auto text-xl" disabled="disabled">
                    <div class="flex gap-2 items-center">
                        <img src="/favicon.ico" alt="">
                        <h1 class="text-2xl font-bold text-white">Dashboard Admin RPS</h1>
                    </div>
                </a>
            </div>
            <div class="flex-none gap-2">
                <form action="" method="get">
                    <div class="form-control">
                        <div class="input-group w-96">
                            <input type="text" placeholder="Cari Kata Kunci..." class="input w-full focus:ring-2 focus:ring-yellow-400" name="katakunci" />
                            <button class="btn btn-square bg-violet-400 hover:bg-violet-500 border-none focus:ring-2 focus:ring-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://placeimg.com/80/80/people" />
                        </div>
                    </label>
                    <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end p-3 mx-5 gap-3 w-auto">
            <a href="<?php echo base_url('input'); ?>"><button class="btn  btn-primary text-yellow-50 p-4 rounded-full shadow-lg gap-2"><i class='bx bxs-plus-circle bx-xs'></i>Buat RPS</button></a>
            <!-- <a href="<?php echo base_url('upload'); ?>"><button class="btn btn-outline btn-warning text-yellow-50 p-4 rounded-full shadow-lg gap-2"><i class='bx bx-upload bx-xs'></i>Upload RPS</button></a> -->
        </div>


        
        <div class="form">
            <!-- bg-gradient-to-tr from-purple-300 -->
            <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-700 ">
                <h1 class="container font-bold  text-3xl text-center text-purple-50 py-2 ">RPS Mahasiswa</h1>
                <p class="text-white text-center">-- Universitas AMIKOM Yogyakarta --</p>

                <!-- <label for="my-modal-5" class="btn btn-error mx-auto flex items-center justify-start ">+ Data Mata Kuliah</label>
                <input type="checkbox" id="my-modal-5" class="modal-toggle" />
                <div class="modal">
                    <div class="modal-box w-11/12 max-w-5xl">
                        <h3 class="font-bold text-lg">Congratulations random Internet user!</h3>
                        <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
                        <div class="modal-action">
                            <label for="my-modal-5" class="btn">Yay!</label>
                        </div>
                    </div>
                </div> -->

                <div class="card-body">
                    <div class="w-full">
                        <table class="table table-zebra w-full">
                            <!-- head -->
                            <thead>
                                <t>
                                    <th class="bg-yellow-400 text-white">No.</th>
                                    <th class="bg-yellow-400 text-white">Kode</th>
                                    <th class="bg-yellow-400 text-white">Mata Kuliah</th>
                                    <th class="bg-yellow-400 text-white">SKS</th>
                                    <th class="bg-yellow-400 text-white">Jenis</th>
                                    <th class="bg-yellow-400 text-white"></th>
                                    </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <?php 
                                $nomor = 1;
                                foreach($alldata_semester as $sm): ?>
                                <tr>
                                    <td><?= $nomor++ ?></td>
                                    <td><?= $sm->kode_mk ?></td>
                                    <td><?= $sm->nama_mk ?></td>
                                    <td><?= $sm->sks_mk ?></td>
                                    <td><?= $sm->jenis_mk ?></td>
                                    <td>
                                        <div class="card-actions justify-end">
                                            <a href="<?= base_url('rps_edit').'/'.$sm->id?>" class="btn btn-outline btn-primary font-semibold text-white">Edit RPS</a>
                                            <a href="<?= base_url('rps_hapus').'/'.$sm->id?>" class="btn btn-outline btn-secondary font-semibold text-white">Delete RPS</a>
                                            <a href="<?= base_url('unduh').'/'.$sm->id?> ?>" class="btn btn-accent"><i class='bx bx-download'></i></a>
                                            <a href="<?= base_url('view_rps').'/'.$sm->id?> ?>" class="btn btn-success font-semibold text-white">View RPS</a>
                                        </div>
                                    </td>
                                    <?php endforeach ?>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>

</body>

</html>