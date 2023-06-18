<html>
<head>
<!-- <link rel="stylesheet" href="/css/app.css"> -->
    <style>
        /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
        @page {
            margin: 0cm 0cm;
        }

        /* Define now the real margins of every page in the PDF */
        body {
            margin-top: 1.5cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /* Define the header rules */
        header {
            position: fixed;
            top: 2cm;
            left: 2cm;
            right: 2cm;
            height: 5.5cm;

            /* Extra personal styles */
            /* background-color: #03a9f4; */
            /* color: white; */
            text-align: center;
            /* line-height: 1.5cm; */
        }

        /* Define the footer rules */
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /* Extra personal styles */
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        td {
            padding-left: 15px;
            padding-right: 15px;
        }

        thead {
            background-color: #f2f2f2;
        }

        th {
            padding: 15px 15px 15px 15px;
        }

        .page_break {
            page-break-before: always;
        }

        .td-no-top-border {
            border-top: 1px solid transparent !important;
        }

        .td-no-left-right-border {
            border-left: 1px solid transparent !important;
            border-right: 1px solid transparent !important;
        }

        .td-no-left-border {
            border-left: 1px solid transparent !important;
        }

        .pagenum:before {
            content: counter(page);
        }
    </style>
</head>

<body>
    <table style="width: 100%;margin-top:1cm">
        <tr>
            <td style="width: 100px;text-align:center;" class="td-no-top-border td-no-left-right-border" colspan="4">
                <h1 style="text-transform: capitalize;margin:0px">Rencana Pembelajaran Semester (RPS)</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <img src="/logoamikom.ico" alt="Logo" style="width: 300px;">
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <h2 style="margin:0px">Mata Kuliah:
                    <?= $xp->nama_mk ?>
                </h2>
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <h2 style="margin: 0px;">Program Studi:
                    <?= $xp->nm_prodi ?>
                </h2>
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                Nomor
            </td>
            <td style="text-align:center">
                Tgl. Berlaku Mulai
            </td>
            <td style="text-align:center">
                Tgl. Disusun
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                Revisi
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                <i>
                    <?= $xp->no_rps ?>
                </i>
            </td>
            <td style="text-align:center">
                <i>
                    <?= date('Y', strtotime($xp->tgl_berlaku)) ?>
                </i>
            </td>
            <td style="text-align:center">
                <i>
                    <?= date('d M Y', strtotime($xp->tgl_disusun)) ?>
                </i>
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                <i>
                <?= $xp->revisi ?>
                </i>
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-right-border" colspan="4">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                Disetujui oleh, <br>Dekan Ilmu Komputer
            </td>
            <td style="text-align:center">
                Diperiksa oleh, <br>Kaprodi Teknik Informatika
            </td>
            <td style="text-align:center">
                Disusun oleh, <br>
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                Dikendalikan oleh, <br>Sekretaris Prodi
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                <div style="height:80px;"></div>
                <b><u>Dekan Hanif Al Fatta. M.Kom </u></b>
                <br>
                NIK.190302096
            </td>
            <td style="text-align:center">
                <div style="height:80px;"></div>
                <b><u>Barka Satya, M.Kom</u></b>
                <br>
                NIK.190302xxx
            </td>
            <td style="text-align:center">
                <div style="height:80px;"></div>
                <b><u>
                        <?= $xp->nm_dosen ?>
                    </u></b>
                <br>
                NIK.
                <?= $xp->nik_dosen ?>
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                <div style="height:80px;"></div>
                <b><u>Lukman, M.Kom</u></b>
                <br>
                NIK.190302xxx
            </td>
        </tr>
    </table>
    <!-- <center style="margin-top: 50px;">
        <h2 style="margin:0px"><b>Universitas Amikom Yogyakarta</b></h2>
        <h2 style="margin:0px"><b>Yogyakarta</b></h2>
        <h2 style="margin:0px"><b>2021</b></h2>
    </center>
    <div class="page_break"></div>
    <!-- Define header and footer blocks before your content -->
    <table style="width: 100%;">
        <tr>
            <td class="py-2" style=" text-align: center; width: 100px;" rowspan="4">
                <img src="/logoamikom.ico" alt="Logo" style="width: 150px;">
            </td>
            <td style="text-align: center;" rowspan="4">
                <h3 style="margin:0px;">Rencana Pembelajaran Semester</h3>
                <h3 style="margin:0px;">Program Studi:
                    <?= $xp->nm_prodi ?>
                </h3>
                <h3 style="margin:0px;">Mata Kuliah:
                    <?= $xp->nama_mk ?> 
                </h3>
                <h3 style="margin:0px;">
                    <?= $xp->kode_mk ?>
                </h3>
            </td>
            <td style="text-align: right;">
                Nomor
            </td>
            <td style="text-align: left;">
                <i>:RPS-D3TI-
                    <?= $xp->no_rps ?>
                </i>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Tgl Disusun
            </td>
            <td style="text-align: left;">
                <i>:
                    <?= $xp->tgl_disusun ?>
                </i>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Revisi
            </td>
            <td style="text-align: left;">
                <i>:
                <?= $xp->revisi ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                Halaman
            </td>
            <td style="text-align: left;">
                <i>: <span class="pagenum"></span></i> dari
            </td>
        </tr>
    </table>
    </header>

    <main>
        <div>
            <div style="background-color:grey;margin-bottom:20px">
                <h4 style="margin:0px;padding:5px">1. Identitas</h4>
            </div>
            <table style="width: 100%; font-size:14px">
                <tr>
                    <td>
                        Program Studi
                    </td>
                    <td>
                        <?= $xp->nm_prodi ?>
                    </td>
                    <td>
                        Semester
                    </td>
                    <td colspan="5">
                        <?= $xp->semester ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama & Kode Mata Kuliah
                    </td>
                    <td>
                        <?= $xp->nama_mk ?> |
                        <?= $xp->kode_mk ?>
                    </td>
                    <td>
                        Bobot SKS
                    </td>
                    <td colspan="5">
                        <?= $xp->bobot ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">
                        Detail Presentasi Penilaian
                    </td>
                    <td rowspan="3">
                        <!-- <?= $xp->dtl_nilai ?> -->
                    </td>
                    <td>
                        Dosen Pengampu
                    </td>
                    <td colspan="5">
                        <?= $xp->nm_dosen ?>
                        <br>
                        NIK:
                        <?= $xp->nik_dosen?>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        Klasifikasi Nilai
                    </td>
                    <td style="text-align: center;">
                        >80
                    </td>
                    <td style="text-align: center;">
                        >60 & <80 </td>
                    <td style="text-align: center;">
                        >40 & <60 </td>
                    <td style="text-align: center;">
                        >20 & <40 </td>
                    <td style="text-align: center;">
                        < 20 </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        A
                    </td>
                    <td style="text-align: center;">
                        B
                    </td>
                    <td style="text-align: center;">
                        C
                    </td>
                    <td style="text-align: center;">
                        D
                    </td>
                    <td style="text-align: center;">
                        E
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">2. Gambaran Umum</h4>
            </div>
            <?= $xp->gambaran_umum ?>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">3. Capaian Pembelajaran</h4>
            </div>
            <?= $xp->capaian ?>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">4. Prasyarat dan Pengetahuan Awal <i>(Prior Knowledge)</i></h4>
            </div>
            <?= $xp->persyaratan ?>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">5. Unit-Unit Pembelajaran secara spesifik</h4>
            </div>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr>
                        <th>
                            Kemampuan Akhir yang Diharapkan
                        </th>
                        <th>
                            Indikator
                        </th>
                        <th>
                            Bahan Kajian
                        </th>
                        <th>
                            Metode Pembelajaran
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Metode Penilaian
                        </th>
                        <th>
                            Bahan Ajar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $xp->kemampuan_akhir ?>
                        </td>
                        <td>
                            <?= $xp->indikator ?>
                        </td>
                        <td>
                            <?= $xp->bahan_kajian ?>
                        </td>
                        <td>
                            <?= $xp->metode_belajar ?>
                        </td>
                        <td>
                            <?= $xp->waktu ?>
                        </td>
                        <td>
                            <?= $xp->metode_penelitian ?>
                        </td>
                        <td>
                            <?= $xp->bahan_ajar ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">6. Tugas/Aktivitas dan Penilaian</h4>
            </div>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr>
                        <th>
                            Tugas/Aktivitas
                        </th>
                        <th>
                            Kemampuan Akhir yang diharapkan atau dievaluasi
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Bobot
                        </th>
                        <th>
                            Kriteria Penilaian
                        </th>
                        <th>
                            Indikator Penilaian
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $xp->aktivitas ?>
                        </td>
                        <td>
                            <?= $xp->kemampuan_akhir ?>
                        </td>
                        <td>
                            <?= $xp->waktu_pekan ?>
                        </td>
                        <td>
                            <?= $xp->bobot ?>
                        </td>
                        <td>
                            <?= $xp->kriteria_nilai ?>
                        </td>
                        <td>
                            <?= $xp->indikator_nilai ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="background-color:grey;margin-bottom:0px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">7. Rencana Pelaksanaan Pembelajaran</h4>
            </div>
            <i style="margin-bottom:20px;">
                <?= $xp->referensi ?>
            </i>
            </tbody>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">8. Tugas/Aktivitas dan Penilaian</h4>
            </div>
            <i style="margin-bottom:20px;">Bagian ini memuat keterangan tentang Rencana Pelaksanaan Pembelajaran secara
                detail setiap pertemuan.</i>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr>
                        <th>
                            Minggu/pertemuan
                        </th>
                        <th>
                            Kemampuan Akhir yang diharapkan
                        </th>
                        <th>
                            Indikator
                        </th>
                        <th>
                            Topik & Sub Topik
                        </th>
                        <th>
                            Aktivitas dan Strategi Pembelajaran
                        </th>
                        <th>
                            Waktu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $xp->pertemuan ?>
                        </td>
                        <td>
                            <?= $xp->kemampuan_lks ?>
                        </td>
                        <td>
                            <?= $xp->indikator_lks ?>
                        </td>
                        <td>
                            <?= $xp->topik ?>
                        </td>
                        <td>
                            <?= $xp->aktivitas ?>
                        </td>
                        <td>
                        <?= $xp->waktu_menit ?>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </main>
</body>
</html>