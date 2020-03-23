<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class=" breadcrumb-item active">
      Home
    </li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-user"></i>
          </div>
          <?php
          $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_admin");
          $pecah = $ambil->fetch_assoc();
          // var_dump($pecah['COUNT(*)']);
          // // $admin = $pecah->num_row();
          // $admin = mysqli_num_rows($ambil);
          ?>
          <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Admin</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="index.php?page=admin">
          <span class="float-left">Lihat Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <?php
          $ambil = $koneksi->query("SELECT COUNT(*) FROM tb_kategori");
          $pecah = $ambil->fetch_assoc();

          ?>

          <div class="mr-5"><?php echo $pecah['COUNT(*)'] ?> Kategori</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Lihat Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-shopping-cart"></i>
          </div>
          <?php
          $ambil = $koneksi->query("SELECT * FROM tb_berita");
          $pecah  = mysqli_num_rows($ambil);
          ?>
          <div class="mr-5"><?php echo $pecah ?> Berita</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">Lihat Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-life-ring"></i>
          </div>
          <div class="mr-5">13 New Tickets!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Area Chart Example-->
  <!-- <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>-->

  <!-- DataTables Example -->