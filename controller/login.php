<?php
session_start();
include '../config/connection.php';

// Ambil data dari form login
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Cari user berdasarkan username
$query = "SELECT * FROM Users WHERE username = ?";
$params = [$inputUsername];
$stmt = sqlsrv_query($conn, $query, $params);

if ($stmt === false) {
    die("Query gagal: " . print_r(sqlsrv_errors(), true));
}

$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

// Validasi user
if ($user) {
    // Verifikasi password
    if (password_verify($inputPassword, $user['password'])) {
        // Set sesi berdasarkan data user
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['name'] = isset($user['name']) ? $user['name'] : 'Pengguna'; // Kolom 'name' opsional

        // Redirect sesuai role
        if ($user['role'] === 'admin') {
            header("Location: ../views/pages/admin/Dashboard.php");
        } elseif ($user['role'] === 'mahasiswa') {
            header("Location: ../dashboard.php");
        } else {
            echo "Role tidak dikenali!";
        }
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}

// Tutup koneksi
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
