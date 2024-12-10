<?php
session_start();
include '../config/connection.php';

// Validasi input
if (!isset($_POST['username'], $_POST['password'])) {
    die("Username atau password tidak boleh kosong!");
}

$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Cari user berdasarkan username
$query = "SELECT id_user, username, password, role, name, email, nim, prodi, angkatan FROM Users WHERE username = ?";
$params = [$inputUsername];
$stmt = sqlsrv_query($conn, $query, $params);

// Debug jika query gagal
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

// Validasi user dan password
if ($user) {
    if (password_verify($inputPassword, $user['password'])) {
        // Set sesi login
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['nim'] = $user['nim'];
        $_SESSION['prodi'] = $user['prodi']; // Tambahkan 'prodi' ke session
        $_SESSION['angkatan'] = $user['angkatan']; // Tambahkan 'angkatan' ke session

        // Redirect sesuai role
        if ($user['role'] === 'admin') {
            header("Location: ../views/pages/dashboardadmin.php");
        } elseif ($user['role'] === 'mahasiswa') {
            header("Location: ../views/pages/dashboard.php");
        } else {
            echo "Role tidak dikenali!";
        }
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}
?>
