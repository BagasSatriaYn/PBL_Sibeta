<?php
session_start(); // Pastikan session dimulai
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiBeTa - Unggah UKT</title>
</head>
<body>
  <div class="container">
    <h1>Unggah File Pembayaran UKT</h1>
    <form action="proses-upload.php" method="POST" enctype="multipart/form-data">
      <!-- Hidden field untuk mahasiswa_id -->
      <input type="hidden" name="mahasiswa_id" value="<?php echo htmlspecialchars($_SESSION['mahasiswa_id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
      
      <label for="file_ukt">File Pembayaran UKT (Max 100MB, jpg/pdf/docx):</label>
      <input type="file" name="file_ukt" accept=".jpg,.jpeg,.png,.pdf,.docx" required>
      <button type="submit">Unggah</button>
    </form>
  </div>
</body>
</html>
