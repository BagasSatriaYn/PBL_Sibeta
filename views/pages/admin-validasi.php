<?php
// Koneksi database
include('../../config/connection.php');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data pending
$sql = "SELECT * FROM berkasvalidasi WHERE status = 'pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Berkas Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Verifikasi Berkas Mahasiswa</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Jenis Berkas</th>
            <th>File</th>
            <th>NIM</th>
            <th>Tanggal Upload</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['jenis_berkas'] ?></td>
                    <td><a href="<?= $row['file_path'] ?>" target="_blank">Lihat File</a></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['tanggal_upload'] ?></td>
                    <td>
                        <form action="proses-verifikasi.php" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="status" value="verified">
                            <button type="submit" style="color: green;">Verifikasi</button>
                        </form>
                        <form action="proses-verifikasi.php" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="status" value="rejected">
                            <input type="text" name="admin_note" placeholder="Alasan penolakan" required>
                            <button type="submit" style="color: red;">Tolak</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Tidak ada data pending.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
