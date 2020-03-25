<?php include 'partials/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SB Admin - Login</title>
  <?php include 'partials/head.php'; ?>


</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" class="form-control" required="required" autofocus="autofocus">
              <label>Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" class="form-control" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>

          <button class="btn btn-warning btn-block" name="login">Login</button>
        </form>
        <?php
        if (isset($_POST['login'])) {
          $username  = $_POST['username'];
          $password  = $_POST['password'];


          $cek = $koneksi->query("SELECT *FROM tb_admin WHERE admin_username = '$username' AND admin_password = '$password'");

          $pecah = $cek->fetch_assoc();
          $validasi = $cek->num_rows;

          if ($validasi >= 1) {
            session_start();

            $_SESSION['admin'] = $pecah;

            echo "
            <script>
            alert('Selamat Anda Berhasil Login');
            window.location='index.php';
            </script>";
          } else {
            echo " <script>
            alert('Login Gagal Silahkan Coba Lagi ');
            window.location='login.php';
            </script>";
          }
        }


        ?>


      </div>
    </div>
  </div>



</body>

<?php include 'partials/script.php' ?>

</html>