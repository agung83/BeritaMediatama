<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Admin</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Admin</th>
                            <th>Username Admin</th>
                            <th>Password Admin</th>
                            <th>Nama Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM tb_admin");
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $pecah['admin_id'] ?></td>
                                <td><?php echo $pecah['admin_username'] ?></td>
                                <td><?php echo $pecah['admin_password'] ?></td>
                                <td><?php echo $pecah['admin_nama'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>