<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Dashboard Mahasiswa</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <!-- CSS -->
  <?php include('css.php') ?>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="wrapper flex-grow-1">
    <div class="main-panel">
      <!-- Sidebar -->
      <?php include('../layouts/sidebar.php') ?>
      <!-- Header -->
      <?php include('../layouts/header.php') ?>

      <div class="containers mt-5">
        <div class="page-inner">
          <!-- Page Title -->
          <div class="pt-2 pb-4" style="text-align: left;">
            <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>
              <h6 class="op-7 mb-2">Halaman Utama Mahasiswa</h6>
            </div>
          </div>

          <!-- Simpel Page Content -->
          <div class="container">
            <div class="d-flex justify-content-between">
              <!-- Box 1 -->
              <a href="cek-status.php" class="box w-50 me-5 text-center text-decoration-none">
                <div class="position-relative">
                  <img src="../assets/img/cek.png" alt="Status Pengajuan" class="w-100" style="object-fit: cover; height: 200px; border-radius: 8px;">
                </div>
                <span class="fw-bold text-black fs-4 d-block mt-2">Status Pengajuan</span>
              </a>

              <!-- Box 2 -->
              <a href="upload-berkas.php" class="box w-50 text-center text-decoration-none">
                <div class="position-relative">
                  <img src="../assets/img/aplod.png" alt="Upload Berkas" class="w-100" style="object-fit: cover; height: 200px; border-radius: 8px;">
                </div>
                <span class="fw-bold text-black fs-4 d-block mt-2">Upload Berkas</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  
    <?php include('../layouts/footer.php') ?>
 

  <!-- JavaScript -->
  <?php include('js.php') ?>
</body>

</html>
