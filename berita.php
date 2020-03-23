<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Berita</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Berita</div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" style="margin-top: -10px; " href="index.php?page=tambahberita">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Admin</th>
                            <th>Nama Kategori</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Berita</th>
                            <th>Isi Berita</th>
                            <th>Gambar Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        $ambil = $koneksi->query("SELECT * FROM tb_berita join tb_admin on tb_admin.admin_id = tb_berita.admin_id join tb_kategori on tb_kategori.kategori_id = tb_berita.kategori_id");
                        while ($pecah = $ambil->fetch_assoc()) {

                        ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['admin_nama'] ?></td>
                                <td><?php echo $pecah['kategori_nama'] ?></td>
                                <td><?php echo $pecah['berita_judul'] ?></td>
                                <td><?php echo $pecah['berita_tgl']; ?></td>
                                <td><?php echo substr($pecah['berita_isi'], 0, 30)  ?></td>
                                <td><img src="images/<?php echo $pecah['berita_gambar']; ?>" style="width : 150px; height: 80px;" alt=""></td>
                                <td>
                                    <a class="btn btn-warning" href="index.php?page=edit_berita&idedit=<?php echo $pecah['berita_id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="index.php?page=hapusberita&idhapus=<?php echo $pecah['berita_id']; ?>">Hapus</a>
                                </td>
                                <?php $nomor++; ?>
                            <?php   } ?>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>