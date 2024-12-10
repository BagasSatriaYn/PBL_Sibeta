<?php
session_start();
require '../../config/connection.php'; // Gunakan file koneksi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $mahasiswa_id = $_POST['mahasiswa_id'] ?? null;
    $file_ukt = $_FILES['file_ukt'] ?? null;
    var_dump($mahasiswa_id, $target_file);
    die();
    

    // Tentukan direktori tempat menyimpan file
    $target_dir = "uploads/";
    $file_name = basename($file_ukt['name']);
    $target_file = $target_dir . uniqid() . "_" . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi ukuran dan tipe file
    if ($file_ukt['size'] > 100 * 1024 * 1024) {
        die("Ukuran file terlalu besar (Max 100MB).");
    }

    if (!in_array($file_type, ['jpg', 'jpeg', 'png', 'pdf', 'docx'])) {
        die("Ekstensi file tidak didukung. Hanya diperbolehkan jpg, jpeg, png, pdf, dan docx.");
    }

    // Pindahkan file ke folder upload
    if (move_uploaded_file($file_ukt['tmp_name'], $target_file)) {
        // Simpan informasi file ke database
        $query = "INSERT INTO uploads (mahasiswa_id, file_ukt, status, nim) VALUES (?, ?, 'Pending' ,?)";
        $params = [$mahasiswa_id, $target_file];
        $stmt = sqlsrv_query($conn, $query, $params);

        if ($stmt) {
            echo "File berhasil diunggah!";
        } else {
            echo "Gagal menyimpan ke database: " . print_r(sqlsrv_errors(), true);
        }
    } else {
        echo "Gagal mengunggah file.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
