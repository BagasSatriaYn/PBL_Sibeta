<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiBeTa - Unggah Berkas</title>
  <?php include('css.php') ?>
</head>
<body>
  <div class="container">
    <main class="main-content">
      <?php include('../layouts/sidebar.php') ?>

      <header class="fixed-top bg-light shadow" style="margin-left: 17.5%; width: 75%;">
        <?php include('../layouts/header.php'); ?>
      </header>

      <div class="content">
        <h1>Unggah Berkas</h1>
        <p>Dashboard / Unggah Berkas</p>

        <form action="proses-upload.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION['id_user'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

          <div class="upload-section">
            <div class="upload-item">
              <label>File Pembayaran UKT</label>
              <div class="file-input">
                <img src="../assets/img/placeholder.png" alt="Preview File">
                <input type="file" name="file_ukt" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
                <span>Ukuran (Max 100 MB)</span>
                <span>Ekstensi (jpg/.docx/.pdf)</span>
              </div>
            </div>

            <div class="upload-item">
              <label>File Peminjaman Buku</label>
              <div class="file-input">
                <img src="../assets/img/placeholder.png" alt="Preview File">
                <input type="file" name="file_buku" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
                <span>Ukuran (Max 100 MB)</span>
                <span>Ekstensi (jpg/.docx/.pdf)</span>
              </div>
            </div>

            <div class="upload-item">
              <label>File Surat Kompen</label>
              <div class="file-input">
                <img src="../assets/img/placeholder.png" alt="Preview File">
                <input type="file" name="file_kompen" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
                <span>Ukuran (Max 100 MB)</span>
                <span>Ekstensi (jpg/.docx/.pdf)</span>
              </div>
            </div>

            <div class="upload-item">
              <label>File Tugas Akhir (Skripsi)</label>
              <div class="file-input">
                <img src="../assets/img/placeholder.png" alt="Preview File">
                <input type="file" name="file_skripsi" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
                <span>Ukuran (Max 100 MB)</span>
                <span>Ekstensi (jpg/.docx/.pdf)</span>
              </div>
            </div>

            <div class="upload-item">
              <label>File Publikasi Ilmiah (Jurnal)</label>
              <div class="file-input">
                <img src="../assets/img/placeholder.png" alt="Preview File">
                <input type="file" name="file_jurnal" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
                <span>Ukuran (Max 100 MB)</span>
                <span>Ekstensi (jpg/.docx/.pdf)</span>
              </div>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn-upload">Unggah Berkas</button>
          </div>
        </form>
      </div>
    </main>
  </div>

  <footer class="fixed-bottom bg-light shadow" style="margin-left: 17.5%; width: 75%;">
            <?php include('../layouts/footer.php'); ?>
        </footer>
        
  <script src="script.js"></script>
</body>
</html>
