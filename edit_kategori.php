<h2 class="text-center font-italic">Edit Nama Kategori </h2>
<hr>


<div class="container  bg- pt-3 pb-3 pl-3 pr-3">


    <form action="" method="POST" class="">
        <?php
        $idedit  =  $_GET['idedit'];
        $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE kategori_id = '$idedit' ");
        $pecah  = $ambil->fetch_assoc();
        ?>
        <div class="form-group">
            <label class="font-weight-bold">Nama Kategori</label>
            <input type="text" name="kategori" class="form-control" style="width: 30%; " value="<?php echo $pecah['kategori_nama'] ?>">
        </div>

        <button class="btn btn-primary" name="edit">Edit</button>
    </form>
    <?php
    if (isset($_POST['edit'])) {
        $kategori   = $_POST['kategori'];

        $koneksi->query("UPDATE tb_kategori SET kategori_nama = '$kategori' where kategori_id = '$idedit'");
        echo "
                    <script>
                    alert('DATA TELAH DI RUBAH');
                    window.location='index.php?page=kategori';
                    
                    </script>";
    }


    ?>



</div>