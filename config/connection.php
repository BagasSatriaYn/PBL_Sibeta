<?php
$servername = "DESKTOP-AHDJTK1";
$database = "sibeta";
$username = "sa";
$password = "bagas000";

// Koneksi ke database
$conn = sqlsrv_connect($servername, [
    "Database" => $database,
    "Uid" => $username,
    "PWD" => $password
]);

if (!$conn) {
    die("Koneksi gagal: " . print_r(sqlsrv_errors(), true));
}
?>