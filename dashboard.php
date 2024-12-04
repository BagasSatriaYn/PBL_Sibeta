<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Dashboard Mahasiswa</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <!-- CSS -->
  <?php include('views/pages/css.php') ?>
</head>

<body>
  <div class="wrapper">
    <div class="main-panel">
      <!-- Sidebar -->
      <?php include('views/layouts/sidebar.php') ?>
      <!-- Header -->
      <?php include('views/layouts/header.php') ?>

      <div class="container">
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
            <a href="views/pages/cek-status.php" class="box">
              <img src="assets/img/cek.png" alt="Status Pengajuan" class="box-image">
              <span>Status Pengajuan</span>
            </a>

            <!-- Box 2 -->
            <a href="views/pages/upload-berkas.php" class="box">
              <img src="assets/img/aplod.png" alt="Upload Berkas" class="box-image">
              <span>Upload Berkas</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php include('views/layouts/footer.php') ?>
    </div>
  </div>

  <!-- JavaScript -->
  <?php include('views/pages/js.php') ?>

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  background-color: #f4f4f4;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(100vh - 200px); /* Pastikan konten mengisi ruang yang tersedia */
  flex-wrap: wrap; /* Agar elemen bisa berpindah ke baris baru jika diperlukan */
  gap: 20px; /* Menambahkan jarak antar box */
}

.box {
  width: 200px;
  height: 100px;
  background-color: #007bff;
  color: #fff;
  display: flex;
  justify-content: left;
  align-items: left;
  border-radius: 8px;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  transition: transform 0.2s, background-color 0.2s;
  text-align: center;
  margin: 10px; /* Memberikan jarak tambahan di sekitar box */
}

.box:hover {
  background-color: #0056b3;
  transform: scale(1.05);
}

.box img {
  width: 300px;
  height: 150px;
  margin-right: 10px;
}

.box span {
  font-size: 16px;
  font-weight: bold;
}

  </style>
</body>

</html>
