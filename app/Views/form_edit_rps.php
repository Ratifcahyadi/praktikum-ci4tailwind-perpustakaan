<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM EDIT RPS AMIKOM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
</head>

<body class="bg-slate-800 min-h-screen">
    <div class="bg-violet-600 py-3 flex items-center">
        <a href="<?php echo base_url(); ?>">
            <button class="btn btn-info rounded-full my-2 mx-5 gap-1 font-bold sm:font-normal sm:gap-0 text-white shadow-xl">
                <i class='bx bx-left-arrow-alt bx-md '></i>Kembali</button>
        </a>
        <div class="mx-auto">
            <h1 class="text-xl text-white font-bold text-center ">Form Edit RPS Mahasiswa</h1>
            <p class="text-white text-center">-- Universitas AMIKOM Yogyakarta --</p>
        </div>
    </div>

    <!-- Dashboard RPS -->
    <form action="<?= base_url('proses_edit') ?>" method="POST">
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-700 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">Informasi RPS</h2>

                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white"></span>
                    </label>
                    <input type="hidden" value="<?= $data_semester->id ?>" id="id_sm" name="id" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Kode</span>
                    </label>
                    <input id="kode_mk" name="kode_mk" type="text" value="<?= $data_semester->kode_mk ?>" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Nama Mata Kuliah</span>
                    </label>
                    <input id="nama_mk" name="nama_mk" type="text" value="<?= $data_semester->nama_mk ?>" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Pilih SKS</span>
                    </label>
                    <select id="sks_mk" name="sks_mk" value="<?= $data_semester->sks_mk ?>" class="select select-bordered w-full focus:ring-2 focus:ring-yellow-400">
                        <option disabled selected>SKS</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <label class="label">
                    <span class="label-text text-2xl text-white">Jenis </span>
                </label>
                <select id="jenis_mk" name="jenis_mk" value="<?= $data_semester->jenis_mk ?>" class="select select-bordered w-full focus:ring-2 focus:ring-yellow-400">
                    <option disabled selected>Jenis</option>
                    <option value="Teori">Teori</option>
                    <option value="Praktikum">Praktikum</option>
                </select>
            </div>
        </div>


        <!-- Header -->
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-600 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">
                    Header RPS</h2>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Pilih Program Studi</span>
                    </label>
                    <select name="nm_prodi" id="nm_prodi" value="<?= $data_semester->nm_prodi ?>" class="select select-bordered w-full focus:ring-2 focus:ring-yellow-400">
                        <option>D3 Teknik Informatika</option>
                        <option>D3 Manajemen Informasi</option>
                        <option>S1 Teknik Informatika</option>
                    </select>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Nomor RPS</span>
                    </label>
                    <input name="no_rps" id="no_rps" value="<?= $data_semester->no_rps ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Nama Dosen Pengampu</span>
                    </label>
                    <input name="nm_dosen" id="nm_dosen" value="<?= $data_semester->nm_dosen ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">NIK Dosen Pengampu</span>
                    </label>
                    <input name="nik_dosen" id="nik_dosen" value="<?= $data_semester->nik_dosen ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Header Nomor Surat RPS</span>
                    </label>
                    <input name="nomor_surat" id="nomor_surat" value="<?= $data_semester->nomor_surat ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Revisi</span>
                    </label>
                    <input name="revisi" id="revisi" value="<?= $data_semester->revisi ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">tanggal Mulai Berlaku</span>
                    </label>
                    <input name="tgl_berlaku" id="tgl_berlaku" value="<?= $data_semester->tgl_berlaku ?>" type="date" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">tanggal Disusun</span>
                    </label>
                    <input name="tgl_disusun" id="tgl_disusun" value="<?= $data_semester->tgl_disusun ?>" disabled placeholder="Otomatis terisi saat klik save" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
            </div>
        </div>

        <!-- Deskripsi -->
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-700 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">
                    Deskripsi RPS</h2>
                <div class="form-control w-full ">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text text-2xl text-white">Semester</span>
                        </label>
                        <select name="semester" id="semester" value="" class="select select-bordered w-full focus:ring-2 focus:ring-yellow-400">
                            <option>Ganjil</option>
                            <option>Genap</option>
                        </select>
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text text-2xl text-white">Detail Presentasi Penilaian</span>
                        </label>
                        <textarea name="dtl_nilai" id="dtl_nilai" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->dtl_nilai ?> </textarea>
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text text-2xl text-white">Gambaran Umum</span>
                        </label>
                        <textarea name="gambaran_umum" id="gambaran_umum" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->gambaran_umum ?></textarea>
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text text-2xl text-white">Capaian Detail Presentasi Penilaian</span>
                        </label>
                        <textarea name="capaian" id="capaian" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->capaian ?></textarea>
                    </div>
                    <div class="form-control w-full ">
                        <label class="label">
                            <span class="label-text text-2xl text-white">Prasyarat dan Pengetahuan Awal(Prior
                                Knowledge)</span>
                        </label>
                        <textarea name="persyaratan" id="persyaratan" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->persyaratan ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Spesifikasi -->
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-600 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">
                    Spesifikasi RPS</h2>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Kemampuan Akhir Yang Diharapakan</span>
                    </label>
                    <textarea name="kemampuan_akhir" id="kemampuan_akhir" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->kemampuan_akhir ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Indikator</span>
                    </label>
                    <textarea name="indikator" id="indikator" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->indikator ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Bahan Kajian</span>
                    </label>
                    <textarea name="bahan_kajian" id="bahan_kajian" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->bahan_kajian ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Metode Pembelajaran</span>
                    </label>
                    <textarea name="metode_belajar" id="metode_belajar" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->metode_belajar ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Waktu</span>
                    </label>
                    <input name="waktu" id="waktu" value="<?= $data_semester->waktu ?>" type="text" placeholder="000 menit" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Metode Penilitian</span>
                    </label>
                    <textarea name="metode_penelitian" id="metode_penelitian" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->metode_penelitian ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Bahan Ajar</span>
                    </label>
                    <textarea name="bahan_ajar" id="bahan_ajar" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->bahan_ajar ?></textarea>
                </div>
                <!-- <div class="flex justify-end">
                    <button class="btn bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ...">
                        + Tambah Spesifikasi RPS
                    </button>
                </div> -->
            </div>
        </div>

        <!-- Tugas -->
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-700 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">
                    Tugas RPS</h2>

                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Tugas/Aktivitas</span>
                    </label>
                    <textarea name="tugas" id="tugas" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->tugas ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Kemampuan Akhir yang diharapkan atau dievaluasi</span>
                    </label>
                    <textarea name="akhir_evaluasi" id="akhir_evaluasi" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->akhir_evaluasi ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Waktu Pekan</span>
                    </label>
                    <input name="waktu_pekan" id="waktu_pekan" value="<?= $data_semester->waktu_pekan ?>" type="text" placeholder="Minggu 1 - 2" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Bobot</span>
                    </label>
                    <input name="bobot" id="bobot" value="<?= $data_semester->bobot ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Kriteria Penelitian</span>
                    </label>
                    <textarea name="kriteria_nilai" id="kriteria_nilai" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->kriteria_nilai ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Indikator Penelitian</span>
                    </label>
                    <textarea name="indikator_nilai" id="indikator_nilai" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->indikator_nilai ?></textarea>
                </div>
                <!-- <div class="flex justify-end">
                    <button class="btn bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ...">
                        + Tambah Tugas RPS
                    </button>
                </div> -->
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Referensi</span>
                    </label>
                    <textarea name="referensi" id="referensi" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->referensi ?></textarea>
                </div>
            </div>
        </div>

        <!-- Pelaksanaan -->
        <div class="card w-auto mx-5 my-7 shadow-xl bg-slate-600 ">
            <div class="card-body w-auto mx-5 my-7 ">
                <h2 class="card-title border-b-2 py-2 border-primary-500 border-slate-400 text-center text-yellow-400 text-4xl w-auto max-w-sm">
                    Pelaksanaan</h2>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Minggu/Pertemuan</span>
                    </label>
                    <input name="pertemuan" id="pertemuan" value="<?= $data_semester->pertemuan ?>" type="text" placeholder="Type here" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Kemampuan Akhir yang Diharapakan</span>
                    </label>
                    <textarea name="kemampuan_lks" id="kemampuan_lks" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->kemampuan_lks ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Indikator Pelaksanaan</span>
                    </label>
                    <textarea name="indikator_lks" id="indikator_lks" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->indikator_lks ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Topik dan Subtopik</span>
                    </label>
                    <textarea name="topik" id="topik" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->topik ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Aktivitas dan Strategi Pembelajaran</span>
                    </label>
                    <textarea name="aktivitas" id="aktivitas" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->aktivitas ?></textarea>
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Waktu</span>
                    </label>
                    <input name="waktu_menit" id="waktu_menit" value="<?= $data_semester->waktu_menit ?>" type="text" placeholder="000 menit" class="input input-bordered w-full shadow-2xl focus:ring-2 focus:ring-yellow-400" />
                </div>
                <div class="form-control w-full ">
                    <label class="label">
                        <span class="label-text text-2xl text-white">Penilaian</span>
                    </label>
                    <textarea name="penilaian_bobot" id="penilaian_bobot" value="" type="text" class="textarea w-full shadow-2xl focus:ring-2 focus:ring-yellow-400"><?= $data_semester->penilaian_bobot ?></textarea>
                </div>
                <!-- <div class="flex justify-end">
                    <button class="btn bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 ...">
                        + Tambah Pelaksanaan RPS
                    </button>
                </div> -->
            </div>
        </div>

        <div class="flex items-center justify-end py-3 mx-5 gap-3 w-auto">
            <button href="" type="submit" class="btn btn-success w-full" id="tombolSimpan">Update</button>
        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('#dtl_nilai'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#gambaran_umum'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#capaian'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#persyaratan'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#kemampuan_akhir'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#indikator'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#bahan_kajian'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#bahan_ajar'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#metode_belajar'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#metode_penelitian'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#tugas'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#akhir_evaluasi'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#kriteria_nilai'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#indikator_nilai'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#referensi'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#kemampuan_lks'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#indikator_lks'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#topik'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#aktivitas'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#penilaian_bobot'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </form>

</body>

</html>