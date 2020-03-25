<?php include 'partials/koneksi.php'; ?>

<title>Laporan Berita</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    .table-responsive td {
        text-align: justify;

    }

    .table-responsive table {
        margin-top: 0px;
        color: black;
    }

    .container h2 {
        margin-top: 90px;
    }
</style>




<div class="container ">
    <h2 align="center">LAPORAN BERITA MEDIATAMA</h2>
    <hr style="width: 890px;">
    <div class="table-responsive">


        <table class="table table-bordered" style="width: 900px;  " align="center">
            <thead>
                <tr>
                    <th>Admin</th>
                    <th>Kategori</th>
                    <th>Tanggal berita</th>
                    <th>Judul Berita</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.kategori_id = tb_kategori.kategori_id JOIN tb_admin ON tb_admin.admin_id = tb_berita.admin_id");
                while ($pecah =  $ambil->fetch_assoc()) {
                    # code...
                ?>

                    <tr>
                        <td><?php echo $pecah['admin_nama'] ?></td>
                        <td><?php echo $pecah['kategori_nama']; ?></td>
                        <td><?php echo $pecah['berita_tgl']; ?></td>
                        <td><?php echo $pecah['berita_judul']; ?></td>
                    </tr>
                <?php   }   ?>
            </tbody>
            <!--- <a  href="javascript:window.print()" class="btn btn-success">Print</a>-->

        </table>

    </div>

</div>