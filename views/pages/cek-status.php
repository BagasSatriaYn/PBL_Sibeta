<?php
session_start();
include('../../config/connection.php');

// Pastikan session sudah dimulai dan ada nim mahasiswa yang login
if (isset($_SESSION['nim'])) {
    $nim = $_SESSION['nim'];
} else {
    echo "Error: NIM tidak ditemukan. Pastikan Anda sudah login.";
    exit;
}

// Query untuk mengambil data mahasiswa dan status pengajuan
$sql = "SELECT * FROM status_pengajuan WHERE nim = ?";
$params = array($nim);
$result = sqlsrv_query($conn, $sql, $params);

// Cek apakah query berhasil dan ada hasilnya
if ($result === false) {
    die("Error dalam eksekusi query: " . print_r(sqlsrv_errors(), true));
} elseif (sqlsrv_has_rows($result) === false) {
    die("Query berhasil, tetapi tidak ada data yang ditemukan.");
}

// Mengambil data baris pertama
$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

// Fungsi untuk menentukan warna berdasarkan status
function getStatusColor($status) {
    return ($status === 'tuntas') ? 'green' : 'red';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Ajukan Bebas Tanggungan</title>
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
     

      <!-- Konten di bawah header -->
      <div class="containers">
        <div class="page-inner">
          <!-- Page Title -->
          <div class="pt-2 pb-4" style="text-align: left;">
            <!-- Judul ditampilkan di bawah header -->
            <h3 class="fw-bold mb-3">Ajukan Bebas Tanggungan</h3>
            <h3 class="fw-bold mb-3">Cek Status dan Ajukan Bebas Tanggungan Anda</h3>
          </div>

          <div class="card-container">
  <?php
  $items = ['ukt', 'perpustakaan', 'kompen', 'skripsi', 'jurnal'];
  foreach ($items as $item):
      $status = $row[$item . '_status'];
      $pengajuan_status = $row[$item . '_status_pengajuan'];
  ?>
    <div class="card">
      <div class="card-content">
        <img src="<?= $item ?>-icon.png" alt="<?= ucfirst($item) ?> Icon">
        <h3><?= ucfirst($item) ?></h3>
        <p>Status: <span class="status <?= getStatusColor($status) ?>"><?= $status ?></span></p>
        <p>Status Pengajuan: <span class="status <?= getStatusColor($pengajuan_status) ?>"><?= $pengajuan_status ?></span></p>
        <a href="#">Lihat Detail</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>

         <!-- Form Ajukan Bebas Tanggungan -->
<div class="table-container">
  <h2>Ajukan Bebas Tanggungan</h2>
  <p>*Hanya dapat dilakukan jika semua status sudah berwarna hijau</p>

  <form action="submit_bebas_tanggungan.php" method="POST">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Program Studi</th>
          <th>Status</th>
          <th>Catatan</th>
          <th>File</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><?= $row['nim'] ?></td>`
          <td><?= $row['nama'] ?></td>
          <td><?= $row['prodi'] ?></td>
          <td><?= $row['ukt_status'] === 'tuntas' ? 'Tuntas' : 'Belum Tuntas' ?></td>
          <td>-</td>
          <td>
          <?php if (!empty($row['file_patch'])) : ?>
              <a href="uploads/<?= htmlspecialchars($row['file_patch']) ?>" target="_blank">Download</a>
          <?php else : ?>
              Tidak ada file
          <?php endif; ?>
      </td>

        </tr>
      </tbody>
    </table>
    <?php
      $allTuntas = true;
      foreach (['ukt_status', 'perpustakaan_status', 'kompen_status', 'skripsi_status', 'jurnal_status', 'file_patch'] as $status) {
          if (!isset($row[$status]) || ($row[$status] !== 'tuntas' && $status !== 'file_patch')) {
              $allTuntas = false;
              break;
          }
      }
      ?>

    <button type="submit" <?= $allTuntas ? '' : 'disabled' ?> style="background-color: <?= $allTuntas ? 'blue' : 'grey' ?>; color: white;">
      Download
    </button>
  </form>
</div>

      <!-- Footer -->
      <?php include('../layouts/footer.php') ?>
    </div>
  </div>

  <!-- JavaScript -->
  <?php include('js.php') ?>
</body>

</html>
