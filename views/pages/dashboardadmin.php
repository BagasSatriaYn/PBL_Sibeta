<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Dashboard Admin</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <!-- CSS -->
  <?php include('css.php') ?>
</head>

<body>
  <div class="wrapper">
    <div class="main-panel">
      <!-- Sidebar -->
      <?php include('../layouts/sidebar.php') ?>
      <!-- Header -->
      <?php include('../layouts/header.php') ?>

      <div class="containers">
        <div class="page-inner">
          <!-- Page Title -->
          <div class="pt-2 pb-4" style="text-align: left;">
          <div>
           <h3 class="fw-bold mb-3">Dashboard</h3>
            <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
          </div>
        </div>


          <!-- Simpel Page Content -->
          <div class="container d-flex gap-3 justify-content-center">
            <!-- Box 1 -->
            <a href="validasi-ukt.php" class="box">
              <img src="assets/img/cek.png" alt="Validasi Berkas" class="box-image">
              <span>Validasi Berkas</span>
            </a>

            <!-- Box 2 -->
            <a href="upload-berkas.php" class="box">
              <img src="assets/img/aplod.png" alt="Upload Berkas" class="box-image">
              <span>Upload Berkas</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include('../layouts/footer.php') ?>
    </div>
  </div>

  <!-- JavaScript -->
  <?php include('js.php') ?>

  