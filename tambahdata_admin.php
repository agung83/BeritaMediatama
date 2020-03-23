<h2 class="text-center">Tambah Data</h2>
<hr>

<div class="container bg- pt-3 pb-3 pl-3 pr-3">


    <form action="" method="POST">

        <div class="form-group">
            <label class="font-weight-bold">Nama Admin</label>
            <input type="text" name="nama" class="form-control" style="width: 70%;">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Username Admin </label>
            <input type="text" name="username" class="form-control" style="width: 70%;">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Password Admin </label>
            <input type="password" name="password" class="form-control" style="width: 70%; ">
        </div>

        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $txt_nama              =    $_POST['nama'];
        $txt_username          =    $_POST['username'];
        $txt_password          =    $_POST['password'];






        $koneksi->query("INSERT INTO tb_admin (admin_nama,admin_username,admin_password) values ('$txt_nama','$txt_username','$txt_password')");


        echo "
      <script>
      alert('data tersimpan');
      window.location='index.php?page=admin';
      
      </script>";
    }


    ?>



</div>


</div>