<?php
$idhapus = $_GET['idhapus'];

$koneksi->query("DELETE FROM tb_berita WHERE berita_id = '$idhapus'");

echo "
    <script>
    alert('Data Terhapus');
    window.location='index.php?page=berita';
    
    </script>";
