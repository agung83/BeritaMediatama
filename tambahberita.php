<div class="container">




    <div class="card mb-3  " style="width: 100%; ">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Input Data Berita Baru</div>
        <div class="card-body pl-5">

            <form action="" method="POST" style="width: 90%;" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="font-weight-bold">Id Admin</label>
                    <select class="form-control" name="idadmin">
                        <option>--Pilih Id Admin--</option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_admin ORDER BY admin_id");
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>

                            <option value="<?php echo $pecah['admin_id']; ?>"><?php echo $pecah['admin_id'];
                                                                                echo " ";
                                                                                echo $pecah['admin_nama']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Id Kategori</label>
                    <select class="form-control" name="idkategori">
                        <option>--Pilih Id Kategori--</option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_kategori ORDER BY kategori_id");
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $pecah['kategori_id']; ?>"><?php echo $pecah['kategori_id'];
                                                                                    echo " ";
                                                                                    echo $pecah['kategori_nama'];

                                                                                    ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Tanggal Berita</label>
                    <input type="date" name="tgl_berita" class="form-control" value="<?php echo date("Y-m-d"); ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Isi Berita</label>
                    <textarea class="form-control" name="isiberita" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Gambar Berita</label>
                    <input type="file" name="berita_gambar" class="form-control">
                </div>




                <button name="save" type="submit" class="btn btn-danger">Simpan</button>

            </form>

        </div>
    </div>



</div>




<?php
if (isset($_POST['save'])) {
    $txt_idadmin          =  $_POST['idadmin'];
    $txt_idkategori        =  $_POST['idkategori'];
    $txt_judul            =  $_POST['judul_berita'];
    $txt_tgl             =  $_POST['tgl_berita'];
    $txt_isiberita        =  $_POST['isiberita'];

    $nama = $_FILES['berita_gambar']['name'];
    $lokasi = $_FILES['berita_gambar']['tmp_name'];
    move_uploaded_file($lokasi, "images/" . $nama);




    $koneksi->query("INSERT INTO tb_berita ( admin_id,kategori_id,berita_judul,berita_tgl,berita_isi,berita_gambar ) VALUES ( '$txt_idadmin','$txt_idkategori','$txt_judul','$txt_tgl','$txt_isiberita','$nama')");




    echo "
          <script>
          alert('Data Tersimpan');
          window.location='index.php?page=berita';
          
          </script>";
}


?>