<!-- Bgaian Views/dashboard/sidebar.php -->
<link rel="stylesheet" href="/css/app.css">
<style>
    /* .sidebar { */
        /* width: 20%; */
        /* background-color: #f1f1f1; */
    /* } */

    .sidebar ul {
        list-style: none;
        padding: 2%;
    }

    .sidebar li {
        margin-bottom: 1%;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        color: #333;
        font-size: 2vw;
        white-space: nowrap;
        margin-bottom: 2vw;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
        }

        .sidebar ul {
            padding: 2%;
        }

        .sidebar li {
            margin-bottom: 2%;
        }
    }
</style>

<div class="sidebar bg-slate-500 w-[300px]" id="sidebar">
    <ul class="mx-2">
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg dashboard-link" href="/dashboard" >Dashboard</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg admin-link" href="/admin">Admin</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg anggota-link" href="/anggota">Anggota</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg buku-link" href="/buku">Buku</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg kategori-link" href="/kategori">Kategori</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg peminjaman-link" href="/peminjaman">Peminjaman</a></li>
        <li><a class="hover:bg-purple-400 hover:text-white hover:p-2 hover:rounded-lg pengembalian-link" href="/pengembalian">Pengembalian</a></li>
    </ul>
</div>


