<?php
// Masukkan koneksi database
include('../../config/connection.php');

// Query untuk mengambil data berkas
$sql = "SELECT * FROM uploads"; // Sesuaikan nama tabel dengan tabel uploads
$result = sqlsrv_query($conn, $sql); // Gunakan sqlsrv_query() untuk eksekusi query
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiBeTa - Validasi Berkas</title>

  <!-- Include CSS -->
  <?php include('css.php'); ?>
</head>
<body>
  <div class="container">
    <main class="main-content">
      <!-- Header -->
      <?php include('../layouts/header.php'); ?>

      <div class="content">
        <h1>Validasi Berkas UKT</h1>
        <p>Dashboard / Validasi Berkas UKT</p>

        <!-- Tabel Data -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Mahasiswa ID</th>
              <th>Bukti</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result) {
                $no = 1; // Penomoran
                while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row["mahasiswa_id"] . "</td>
                            <td><a href='" . htmlspecialchars($row["file_ukt"], ENT_QUOTES, 'UTF-8') . "' target='_blank'>Lihat Bukti</a></td>
                            <td>" . (!empty($row["status"]) ? ucfirst($row["status"]) : '-') . "</td>
                            <td>
                              <form action='proses-verifikasi.php' method='POST'>
                                <input type='hidden' name='id' value='" . $row["id"] . "' />
                                <select name='status' required>
                                  <option value='' disabled selected>Pilih Status</option>
                                  <option value='Verified'>Verifikasi</option>
                                  <option value='Rejected'>Tolak</option>
                                </select>
                                <button type='submit'>Simpan</button>
                              </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Data tidak ditemukan</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <?php include('../layouts/footer.php'); ?>

  <!-- Include JS -->
  <?php include('js.php'); ?>
</body>
</html>
