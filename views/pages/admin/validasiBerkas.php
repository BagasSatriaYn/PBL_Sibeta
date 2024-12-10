<?php
// Fungsi untuk menyediakan data tabel
function getTableData($statusFilter = '', $buktiFilter = '', $search = '') {
    $data = [
        ['nama' => 'Adinda Ivanka Maysanda P', 'nim' => '2341760072', 'prodi' => 'DIV SIB', 'bukti' => 'bayarUKT.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Adyuta Raksa Ramadhana', 'nim' => '2341760073', 'prodi' => 'DIV SIB', 'bukti' => 'peminjamanBuku.pdf', 'status' => 'Selesai'],
        ['nama' => 'Aqueena Regita Hapsari', 'nim' => '2341760074', 'prodi' => 'DIV SIB', 'bukti' => 'tugasAkhir.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Bagas Satria Y N', 'nim' => '2341760075', 'prodi' => 'DIV SIB', 'bukti' => 'suratKompen.pdf', 'status' => 'Selesai'],
        ['nama' => 'Maharani Wirawan', 'nim' => '2341760076', 'prodi' => 'DIV SIB', 'bukti' => 'publikasiIlmiah.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Queenadhynar', 'nim' => '2341760077', 'prodi' => 'DIV SIB', 'bukti' => 'bayarUKT.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Renald Agustinus', 'nim' => '2341760078', 'prodi' => 'DIV SIB', 'bukti' => 'peminjamanBuku.pdf', 'status' => 'Selesai'],
        ['nama' => 'Yusra Yusuf', 'nim' => '2341760079', 'prodi' => 'DIV SIB', 'bukti' => 'tugasAkhir.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Zaki Erlangga', 'nim' => '2341760080', 'prodi' => 'DIV SIB', 'bukti' => 'publikasiIlmiah.pdf', 'status' => 'Selesai'],
        ['nama' => 'Niriza Lailaumi Hidayat', 'nim' => '2341760081', 'prodi' => 'DIV SIB', 'bukti' => 'peminjamanBuku.pdf', 'status' => 'Sedang Proses'],
        ['nama' => 'Nimas Septiandini', 'nim' => '2341760082', 'prodi' => 'DIV SIB', 'bukti' => 'bayarUKT.pdf', 'status' => 'Selesai'],
    ];

    // Filter data jika ada filter status, bukti, atau pencarian
    if ($statusFilter) {
        $data = array_filter($data, fn($row) => $row['status'] === $statusFilter);
    }
    if ($buktiFilter) {
        $data = array_filter($data, fn($row) => strpos(strtolower($row['bukti']), strtolower($buktiFilter)) !== false);
    }
    if ($search) {
        $data = array_filter($data, fn($row) => stripos($row['nama'], $search) !== false);
    }

    return $data;
}

// Ambil filter dari form (jika ada)
$statusFilter = isset($_GET['status']) ? $_GET['status'] : '';
$buktiFilter = isset($_GET['bukti']) ? $_GET['bukti'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Berkas</title>
    <style>
        /* Tetap sama seperti sebelumnya */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; }
        .sidebar { background-color: #f0f0f0; width: 20%; padding: 20px; box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); }
        .sidebar h2 { color: #3d89f5; margin-bottom: 30px; }
        .sidebar a { display: block; margin: 10px 0; color: #333; text-decoration: none; }
        .sidebar button.logout { background-color: #ff4d4d; color: white; border: none; padding: 10px 20px; cursor: pointer; margin-top: 20px; width: 100%; }
        .main-content { width: 80%; padding: 20px; }
        .main-content h1 { margin-bottom: 5px; }
        .breadcrumb { color: gray; font-size: 14px; margin-bottom: 20px; }
        .filters { display: flex; gap: 10px; margin-bottom: 20px; }
        select, input[type="text"], button.filter { padding: 10px; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table th, table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        table th { background-color: #f9f9f9; }
        button.back { background-color: #3d89f5; color: white; border: none; padding: 10px 20px; cursor: pointer; }
        .link-file { color: #3d89f5; text-decoration: none; }
        .link-file:hover { text-decoration: underline; }
    </style>
    <script>
        function autoSubmit() {
            document.getElementById('filterForm').submit();
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <h2>SiBeTa</h2>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <button class="logout">Logout</button>
    </div>

    <div class="main-content">
        <h1>Validasi Berkas</h1>
        <div class="breadcrumb">Dashboard / Validasi Berkas</div>

        <form method="GET" id="filterForm">
            <div class="filters">
                <input type="text" name="search" placeholder="Cari nama..." value="<?= htmlspecialchars($search); ?>" onchange="autoSubmit()">
                <select name="status" onchange="autoSubmit()">
                    <option value="">Semua Status</option>
                    <option value="Sedang Proses" <?= $statusFilter === 'Sedang Proses' ? 'selected' : '' ?>>Sedang Proses</option>
                    <option value="Selesai" <?= $statusFilter === 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                </select>

                <select name="bukti" onchange="autoSubmit()">
                    <option value="">Semua Bukti</option>
                    <option value="bayarUKT" <?= $buktiFilter === 'bayarUKT' ? 'selected' : '' ?>>Pembayaran UKT</option>
                    <option value="peminjamanBuku" <?= $buktiFilter === 'peminjamanBuku' ? 'selected' : '' ?>>Peminjaman Buku</option>
                    <option value="suratKompen" <?= $buktiFilter === 'suratKompen' ? 'selected' : '' ?>>Surat Kompen</option>
                    <option value="tugasAkhir" <?= $buktiFilter === 'tugasAkhir' ? 'selected' : '' ?>>Tugas Akhir</option>
                    <option value="publikasiIlmiah" <?= $buktiFilter === 'publikasiIlmiah' ? 'selected' : '' ?>>Publikasi Ilmiah</option>
                </select>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Bukti</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $filteredData = getTableData($statusFilter, $buktiFilter, $search);
                foreach ($filteredData as $index => $row): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nim']; ?></td>
                        <td><?= $row['prodi']; ?></td>
                        <td>
                            <a href="files/<?= $row['bukti']; ?>" class="link-file"><?= $row['bukti']; ?></a>
                        </td>
                        <td><?= $row['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <button class="back">Kembali</button>
    </div>
</body>
</html>
