<?php
session_start();
include('../../config/connection.php'); // Pastikan file koneksi benar

// Pastikan id_user ada di session
if (!isset($_SESSION['id_user'])) {
    die("ID User tidak ditemukan di session.");
}

$id_user = $_SESSION['id_user']; // Ambil id_user dari session

// Query untuk mengambil nama dan nim dari tabel users berdasarkan id_user
$query = "SELECT name, nim FROM users WHERE id_user = ?";
$params = [$id_user];

// Persiapkan dan jalankan query
$stmt = sqlsrv_prepare($conn, $query, $params);
if (!$stmt) {
    die("Query preparation failed: " . print_r(sqlsrv_errors(), true));
}

if (sqlsrv_execute($stmt)) {
    // Ambil hasil query
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    $name = $row['name'];
    $nim = $row['nim'];
} else {
    die("Query execution failed: " . print_r(sqlsrv_errors(), true));
}

// Return name dan nim ke halaman utama
return [$name, $nim];
?>
