<h2 class="text-center font-italic">Tambah Nama Kategori Baru</h2>
<hr>


<div class="container  bg- pt-3 pb-3 pl-3 pr-3">


    <form action="" method="POST" class="">


        <div class="form-group">
            <label class="font-weight-bold">Nama Kategori</label>
            <input type="text" name="kategori" class="form-control" style="width: 30%; ">
        </div>

        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>
    <?php

    if (isset($_POST['simpan'])) {
        $txt_kategori   =  $_POST['kategori'];


        $koneksi->query("INSERT INTO tb_kategori ( kategori_nama ) values ('$txt_kategori')");

        echo "
        <script>
        alert('Data Tersimpan');
         window.location='index.php?page=kategori';           
        </script>";
    }

    ?>



</div>