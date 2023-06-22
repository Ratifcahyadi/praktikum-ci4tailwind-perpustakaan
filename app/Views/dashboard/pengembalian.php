<?php 
// Bagian Views/dashboard/pengembalian.php

// Load header
include('header.php');
?>

<!-- Tambahkan konten body di sini -->
<div class="container">
    <div class="sidebar" id="sidebar">
        <?php include('sidebar.php')?>
    </div>
    <div class="content" id="content">
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

<div class="content">
    <h2>Pengembalian</h2>
    <p>Ini adalah halaman pengembalian perpustakaan</p>
</div>
    </div>
</div>

<?php 
include('footer.php');
?>
