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
        <a class="btn btn-primary mb-2" style="margin-top: -10px; " href="index.php?page=tambahdata_admin">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username Admin</th>
                        <th>Password Admin</th>
                        <th>Nama Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a title="edit" class="btn btn-warning" href="index.php?page=edit_admin&idedit="><i class="far fa-edit"></i></a>
                            <a title="hapus" class="btn btn-danger" href="index.php?page=hapusadmin&idhapus="><i class="fas fa-trash-alt"></i></a>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>