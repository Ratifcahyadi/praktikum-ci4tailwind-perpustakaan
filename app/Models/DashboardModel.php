<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_rps';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode_mk', 'nama_mk', 'sks_mk', 'jenis_mk','revisi', 'no_rps', 'nm_prodi', 'nm_dosen', 'nik_dosen', 'tgl_berlaku', 'tgl_disusun', 'dtl_nilai', 'semester', 'dosen_pengampu', 'gambaran_umum', 'capaian', 'persyaratan', 'kemampuan_akhir', 'indikator', 'bahan_kajian', 'metode_belajar', 'waktu', 'metode_penelitian', 'bahan_ajar', 'tugas', 'akhir_evaluasi', 'waktu_pekan', 'bobot', 'kriteria_nilai', 'indikator_nilai', 'referensi', 'pertemuan', 'kemampuan_lks', 'indikator_lks', 'topik', 'aktivitas', 'waktu_menit', 'penilaian_bobot', 'nomor_surat'
    ];

}
