<?php include 'partials/koneksi.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Berita Mediatama</title>


  <?php include 'partials/head.php'; ?>

</head>

<body id="page-top">

  <?php include 'partials/top.navbar.php'; ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php' ?>
    <!----==================================-->

    <div id="content-wrapper">

      <?php include 'content.php'; ?>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'partials/footer.php'; ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!--modal logout-->
  <?php include 'partials/modal.php'; ?>


</body>

<?php include 'partials/script.php' ?>


</html>