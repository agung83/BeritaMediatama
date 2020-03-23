<div class="container">
    <h1 class="text-center " style=" height: 80px;"><span class=" font-italic font-weight-bold">Input Data Berita</span></h1>


    <form action="" method="POST" style="width: 90%;">

        <div class="form-group">
            <label>Id Admin</label>
            <select class="form-control" name="idadmin">
                <option>--Pilih Id Admin--</option>
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_admin ORDER BY admin_id");
                while ($pecah = $ambil->fetch_assoc()) {
                ?>

                    <option><?php echo $pecah['admin_id'];
                            echo " ";
                            echo $pecah['admin_nama']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Id Kategori</label>
            <select class="form-control" name="idkategori">
                <option>--Pilih Id Kategori--</option>
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_kategori ORDER BY kategori_id");
                while ($pecah = $ambil->fetch_assoc()) {
                ?>
                    <option><?php echo $pecah['kategori_id'];
                            echo " ";
                            echo $pecah['kategori_nama']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Judul Berita</label>
            <input type="text" name="judul_berita" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Berita</label>
            <input type="date" name="tgl_berita" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Berita</label>
            <textarea class="form-control" name="isiberita" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Gambar Berita</label>
            <input type="text" name="gambar_berita" class="form-control">
        </div>




        <button name="save" type="submit" class="btn btn-danger">Simpan</button>

    </form>


    <?php
    if (isset($_POST['save'])) {
        $txt_idadmin          =  $_POST['idadmin'];
        $txt_idkategori        =  $_POST['idkategori'];
        $txt_judul            =  $_POST['judul_berita'];
        $txt_tgl             =  $_POST['tgl_berita'];
        $txt_isiberita        =  $_POST['isiberita'];
        $txt_gambar           =  $_POST['gambar_berita'];





        $koneksi->query("INSERT INTO tb_berita ( admin_id,kategori_id,berita_judul,berita_tgl,berita_isi,berita_gambar ) VALUES ( '$txt_idadmin','$txt_idkategori','$txt_judul','$txt_tgl','$txt_isiberita','$txt_gambar')");




        echo "
          <script>
          alert('Data Tersimpan');
          window.location='index.php?page=berita';
          
          </script>";
    }


    ?>