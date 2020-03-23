<?php

$idhapus = $_GET['idhapus'];

echo $idhapus;


$koneksi->query("DELETE FROM tb_admin where admin_id = '$idhapus'");


echo "
        <script>
        alert('data terhapus');
        window.location='index.php?page=admin';
        
        
        </script>";
