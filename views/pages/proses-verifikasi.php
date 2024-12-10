<?php
include('../../config/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $status = $_POST['status'] ?? null;

    if ($id && $status) {
        $query = "UPDATE uploads SET status = ? WHERE id = ?";
        $params = [$status, $id];
        $stmt = sqlsrv_query($conn, $query, $params);

        if ($stmt) {
            header("Location: validasi-berkas.php?message=success");
        } else {
            echo "Gagal memperbarui status: " . print_r(sqlsrv_errors(), true);
        }
    } else {
        echo "Data tidak lengkap.";
    }
}
?>
