<?php
// Koneksi database
include('../../config/connection.php');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$id = $_POST['id'];
$status = $_POST['status']; // 'verified' atau 'rejected'
$admin_note = isset($_POST['admin_note']) ? $_POST['admin_note'] : null;

// Validasi input
if ($id && in_array($status, ['verified', 'rejected'])) {
    // Update status di database
    $sql = "UPDATE berkasvalidasi SET status = ?, admin_note = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $status, $admin_note, $id);

    if ($stmt->execute()) {
        echo "Berkas berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui berkas.";
    }
} else {
    echo "Input tidak valid.";
}

$conn->close();
?>
