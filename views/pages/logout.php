<?php
session_start(); // Mulai sesi
session_unset(); // Hapus semua data sesi
session_destroy(); // Hancurkan sesi

// Arahkan ke halaman login setelah logout
header("Location: login.html");
exit();
?>