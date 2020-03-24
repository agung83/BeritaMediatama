<div class="container bg- pt-3 pb-3 pl-3 pr-3">
    <?php
    $idedit = $_GET['idedit'];

    $ambil = $koneksi->query("SELECT * FROM tb_berita join tb_admin on tb_admin.admin_id = tb_berita.admin_id join tb_kategori on tb_kategori.kategori_id = tb_berita.kategori_id where berita_id = '$idedit'");
    $pecah = $ambil->fetch_assoc();



    ?>



    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Edit Data Berita</div>
        <div class="card-body">

            <form action="" method="POST" enctype="">

                <div class="form-group" style="width: 70%;">
                    <label class="font-weight-bold">ID & Nama Admin</label>
                    <select class="form-control" name="idadmin">
                        <option value="<?php echo $pecah['admin_id'] ?>"><?php echo $pecah['admin_id'] ?></option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_admin ORDER BY admin_id");
                        while ($nilai = $ambil->fetch_assoc()) {
                        ?>

                            <option value="<?php echo $nilai['admin_id']; ?>"><?php echo "[" . $nilai['admin_id'] . "]";
                                                                                echo " ";
                                                                                echo $nilai['admin_nama']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group" style="width: 70%;">
                    <label class="font-weight-bold">ID & Nama Kategori</label>
                    <select class="form-control" name="idkategori">
                        <option value="<?php echo $pecah['kategori_id']; ?>"><?php echo $pecah['kategori_id']; ?></option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_kategori ORDER BY kategori_id");
                        while ($nilai = $ambil->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $pecah['kategori_id']; ?>"><?php echo  "[" . $nilai['kategori_id'] . "]";
                                                                                    echo " ";
                                                                                    echo $nilai['kategori_nama'];

                                                                                    ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" style="width: 70%;" value="<?php echo $pecah['berita_judul'] ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Tanggal Berita</label>
                    <input type="text" name="tanggal" class="form-control" style="width: 70%;" value="<?php echo $pecah['berita_tgl']; ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Isi Berita</label>
                    <textarea name="isi" id="" cols="2" rows="9" class="form-control" value="<?php echo $pecah['berita_isi']; ?>"><?php echo $pecah['berita_isi']; ?></textarea>
                </div>

                <div class="form-group">
                    <img src="images/<?php echo $pecah['berita_gambar'] ?>" width="200">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Gambar Berita</label>
                    <input type="file" name="berita_gambar" class="form-control" style="width: 50%;">
                </div>

                <button class="btn btn-primary" name="edit">Edit Data</button>
            </form>
        </div>
    </div>


    <?php
    if (isset($_POST['edit'])) {
        $txt_idadmin              =       $_POST['idadmin'];
        $txt_idkategori           =       $_POST['idkategori'];
        $txt_beritajudul          =       $_POST['judul'];
        $txt_beritatgl            =       $_POST['tanggal'];
        $txt_beritaisi            =       $_POST['isi'];

        $nama = $_FILES['berita_gambar']['name'];
        $lokasi = $_FILES['berita_gambar']['tmp_name'];

        if (!empty($lokasi)) {
            move_uploaded_file($lokasi, "images/" . $nama);
            $koneksi->query("UPDATE tb_berita SET admin_id = '$txt_idadmin',kategori_id = '$txt_idkategori',berita_judul = '$txt_beritajudul',berita_tgl = '$txt_beritatgl',berita_isi = '$txt_beritaisi',berita_gambar = '$nama' WHERE berita_id = '$idedit'");
        } else {
            $koneksi->query("UPDATE tb_berita SET admin_id = '$txt_idadmin',kategori_id = '$txt_idkategori',berita_judul = '$txt_beritajudul',berita_tgl = '$txt_beritatgl',berita_isi = '$txt_beritaisi' WHERE berita_id = '$idedit'");
        }


        echo "
        <script>
        alert('Data Telah di rubah')
        window.location='index.php?page=berita'
        
        </script>";
    }


    ?>


</div>
</div>


</div>