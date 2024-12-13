<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: ../../controller/login.php");
    exit;
}

$nim = $_SESSION['nim'] ?? null; // Ambil NIM dari session

if (!$nim || !ctype_digit((string)$nim)) {
    die("NIM tidak ditemukan atau invalid.");
}

$user_id = $_SESSION['id_user']; // Ambil user_id dari session

include('../../config/connection.php'); // Koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];
    $max_size = 100 * 1024 * 1024; // 100 MB
    $upload_path = "uploads/";

    if (!is_dir($upload_path) || !is_writable($upload_path)) {
        die("Direktori upload tidak ditemukan atau tidak memiliki izin tulis.");
    }

    $fields = ['file_ukt', 'file_buku', 'file_kompen', 'file_skripsi', 'file_jurnal'];

    foreach ($fields as $field) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES[$field]['name'];
            $file_size = $_FILES[$field]['size'];
            $file_tmp = $_FILES[$field]['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (!in_array($file_ext, $allowed_extensions)) {
                die("Ekstensi file tidak diperbolehkan untuk $field.");
            }

            if ($file_size > $max_size) {
                die("Ukuran file terlalu besar untuk $field.");
            }

            $new_file_name = uniqid() . '.' . $file_ext;
            $destination = $upload_path . $new_file_name;

            if (move_uploaded_file($file_tmp, $destination)) {
                $jenis_berkas = $field;
                $file_path = $destination;
                $status = 'pending';
                $tanggal_upload = date("Y-m-d H:i:s");

                $sql = "INSERT INTO berkasvalidasi (user_id, jenis_berkas, file_path, status, tanggal_upload, nim)
                        VALUES (?, ?, ?, ?, ?, ?)";
                $params = [$user_id, $jenis_berkas, $file_path, $status, $tanggal_upload, $nim];

                $stmt = sqlsrv_prepare($conn, $sql, $params);
                if ($stmt === false || !sqlsrv_execute($stmt)) {
                    die("Kesalahan menyimpan data file: " . print_r(sqlsrv_errors(), true));
                }

                echo "File $field berhasil diupload dan disimpan ke database.<br>";
            } else {
                error_log("Gagal memindahkan file $field ke $destination", 3, 'upload_errors.log');
                echo "Gagal mengunggah file $field.<br>";
            }
        }
    }
}
?>
