<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Kategori</div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" style="margin-top: -10px; " href="index.php?page=tambahdata_kategori">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                        while ($pecah  = $ambil->fetch_assoc()) {

                        ?>
                            <tr>

                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['kategori_nama']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="index.php?page=edit_kategori&idedit=<?php echo $pecah['kategori_id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="index.php?page=hapus_kategori&idhapus=<?php echo $pecah['kategori_id']; ?>">Hapus</a>
                                </td>
                                <?php $nomor++; ?>
                            <?php } ?>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>