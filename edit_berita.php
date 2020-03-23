<h2 class="text-center font-italic">Edit Data Berita</h2>


<div class="container bg- pt-3 pb-3 pl-3 pr-3">
    <?php
    $idedit = $_GET['idedit'];

    $ambil = $koneksi->query("SELECT * FROM tb_berita join tb_admin on tb_admin.admin_id = tb_berita.admin_id join tb_kategori on tb_kategori.kategori_id = tb_berita.kategori_id where berita_id = '$idedit'");
    $pecah = $ambil->fetch_assoc();

    print_r($pecah);

    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label class="font-weight-bold">ID Admin</label>
            <input type="number" name="id_admin" class="form-control" style="width: 70%;" value="<?php echo $pecah['admin_id'] ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">ID Kategori</label>
            <input type="number" name="id_kategori" class="form-control" style="width: 70%;" value="">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Judul Berita</label>
            <input type="number" name="judul" class="form-control" style="width: 70%;" value="">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Tanggal Berita</label>
            <input type="number" name="tanggal" class="form-control" style="width: 70%;" value="">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Isi Berita</label>
            <input type="number" name="isi" class="form-control" style="width: 70%;" value="">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Gambar Berita</label>
            <input type="number" name="gambar" class="form-control" style="width: 70%;" value="">
        </div>

        <button class="btn btn-primary" name="edit">Edit Data</button>
    </form>



</div>


</div>