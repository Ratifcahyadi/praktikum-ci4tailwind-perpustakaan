<!-- Bagian Views/dashboard/index.php -->
<?php 
// Load header
include('header.php');
?>

<!-- Tambahkan konten body di sini -->
<link rel="stylesheet" href="/css/app.css">
<div class="container">
    <div class="sidebar" id="sidebar">
        <?php include('sidebar.php')?>
    </div>
    <div class="content" id="content">
        <?php include('body.php')?>
    </div>
</div>

<?php 
include('footer.php');
?>