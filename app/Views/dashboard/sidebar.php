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
        margin-bottom: 0;
    }

    .sidebar a {
        display: block;
        text-decoration: none;
        color: #333;
        font-size: 2vw;
        white-space: nowrap;
        /* margin-bottom: 2vw; */
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

<div class="sidebar bg-slate-500 w-[300px] min-h-full" id="sidebar">
    <ul class="mx-2">
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg dashboard-link" href="/dashboard" >Dashboard</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg admin-link" href="/admin">Admin</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg anggota-link" href="/anggota">Anggota</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg buku-link" href="/buku">Buku</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg kategori-link" href="/kategori">Kategori</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg peminjaman-link" href="/peminjaman">Peminjaman</a></li>
        <li><a class=" hover:text-white hover:bg-slate-400 p-2 hover:rounded-lg pengembalian-link" href="/pengembalian">Pengembalian</a></li>
        <li><a class="text-warning hover:text-white hover:bg-red-400 p-2 hover:rounded-lg logout-link" href="/logout">Logout</a></li>
    </ul>
</div>


