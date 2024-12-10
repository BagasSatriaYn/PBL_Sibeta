<?php
session_start();  // Pastikan session dimulai

// Cek apakah mahasiswa sudah login (session nim ada)
if (!isset($_SESSION['nim'])) {
    echo "Anda belum login.";
    exit;
}

// Ambil data dari session
$nim = $_SESSION['nim']; // Ambil nim dari session
$name = $_SESSION['name']; // Ambil nama dari session
$email = $_SESSION['email']; // Ambil email dari session
$prodi = isset($_SESSION['prodi']) ? $_SESSION['prodi'] : ''; // Ambil prodi dari session (jika ada)
$angkatan = isset($_SESSION['angkatan']) ? $_SESSION['angkatan'] : ''; // Ambil angkatan dari session (jika ada)

// Jika data tidak ditemukan di session, ambil dari database
if (empty($name) || empty($prodi) || empty($angkatan)) {
    include('../../config/connection.php');
    
    // Query untuk ambil data mahasiswa dari database berdasarkan nim
    $sql = "SELECT name, email, prodi, angkatan FROM Users WHERE nim = ?";
    $params = [$nim];
    $result = sqlsrv_query($conn, $sql, $params);
    
    if ($result === false) {
        die("Error dalam eksekusi query: " . print_r(sqlsrv_errors(), true));
    }
    
    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
    
    // Ambil data dari database
    $name = $row['name'];
    $email = $row['email'];
    $prodi = $row['prodi'];
    $angkatan = $row['angkatan'];
    
    // Simpan data ke session untuk akses berikutnya
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['prodi'] = $prodi;
    $_SESSION['angkatan'] = $angkatan;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <!-- CSS -->
    <?php include('css.php') ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex vh-100">
        <!-- Sidebar -->
        <div class="bg-light p-3" style="width: 250px;">
            <?php include('../layouts/sidebar.php') ?>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <!-- Header -->
            <header class="mb-4">
                <?php include('../layouts/header.php') ?>
            </header>

            <!-- Konten Utama -->
            <main>
                <h2 class="fw-bold mb-4 " style="margin-top: 100px">Data Diri Mahasiswa</h2>
                <div class="card shadow w-100"> <!-- Tambahkan kelas w-100 di sini -->
                    <div class="card-body d-flex align-items-center">
                        <img src="https://via.placeholder.com/120" class="rounded-circle me-4" alt="Profile Picture">
                        <div>
                            <p class="text-start mb-2"><strong>Nama Mahasiswa:</strong> <?= htmlspecialchars($name) ?></p>
                            <p class="text-start mb-2"><strong>Angkatan:</strong> <?= htmlspecialchars($angkatan) ?></p>
                            <p class="text-start mb-2"><strong>Program Studi:</strong> <?= htmlspecialchars($prodi) ?></p>
                            <p class="text-start mb-2"><strong>NIM:</strong> <?= htmlspecialchars($nim) ?></p>
                            <p class="text-start mb-0"><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="mt-4">
                <?php include('../layouts/footer.php') ?>
            </footer>
        </div>
    </div>

    <!-- JavaScript -->
    <?php include('js.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
