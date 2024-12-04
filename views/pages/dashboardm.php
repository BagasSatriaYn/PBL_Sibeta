<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/dashboardm.css"> <!-- Sesuaikan dengan lokasi file CSS Anda -->
</head>
<body>
      <!-- sidebar -->
      <?php include('views/layouts/sidebar.php') ?>
      <!-- sidebar -->

      <!-- <header> -->
      <?php include('views/layouts/header.php') ?>

        <!-- Main Content -->
        <div class="dashboard-content">
            <!-- Card 1 -->
            <div class="card">
                <img src="../../assets/img/status.png" alt="Status Pengajuan">
                <a href="cekstatus.html" class="card-title">Status Pengajuan</a>
            </div>
            <!-- Card 2 -->
            <div class="card">
                <img src="../../assets/img/upload.png" alt="Unggah Berkas">
                <a href="upload-berkas.html" class="card-title">Unggah Berkas</a>
            </div>
        </div>
    </div>
    <?php include('views/layouts/footer.php') ?>
</body>
</html>
