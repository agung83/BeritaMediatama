<h2 class="text-center font-italic">Edit Data Admin</h2>


<div class="container bg- pt-3 pb-3 pl-3 pr-3">
    <?php
    $idedit = $_GET['idedit'];

    $ambil = $koneksi->query("SELECT * FROM tb_admin where admin_id ='$idedit'");
    $pecah = $ambil->fetch_assoc();

    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label class="font-weight-bold">Nama Admin</label>
            <input type="text" name="nama" class="form-control" style="width: 70%;" value="<?php echo $pecah['admin_nama']; ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Username Admin </label>
            <input type="text" name="username" class="form-control" style="width: 70%;" value="<?php echo $pecah['admin_username'] ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Password Admin </label>
            <input type="text" name="password" class="form-control" style="width: 70%; " value="<?php echo $pecah['admin_password']; ?>">
        </div>

        <button class="btn btn-primary" name="edit">Edit Data</button>
    </form>
    <?php

    if (isset($_POST['edit'])) {


        $txt_nama     =  $_POST['nama'];
        $txt_username =  $_POST['username'];
        $txt_password = $_POST['password'];

        $koneksi->query("UPDATE `tb_admin` SET `admin_username`='$txt_username',`admin_password`='$txt_password',`admin_nama`='$txt_nama' WHERE admin_id = '$idedit'");
        echo "
<script>
alert('Data Sudah Di Rubah')
window.location='index.php?page=admin'
</script>";
    }



    ?>



</div>


</div>