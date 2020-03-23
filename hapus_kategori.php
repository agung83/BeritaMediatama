<?php 
 $idhapus = $_GET['idhapus'];

  $koneksi ->query("DELETE FROM tb_kategori where kategori_id = '$idhapus' ");

echo "
  <script>
  alert('Data Terhapus');
  window.location='index.php?page=kategori';
  
  </script>";
