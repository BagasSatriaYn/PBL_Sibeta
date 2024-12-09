<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Berkas - SiBeTa</title>
    <link rel="stylesheet" href="../../assets/css/uploudberkas.css">
</head>
<body>
<body>
    <div class="container">
        <aside class="sidebar">
            <h1 class="logo">SiBeTa</h1>
            <nav>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </nav>
            <button class="logout">Logout</button>
        </aside>
        <main class="main-content">
            <header>
                <h2>Unggah Berkas</h2>
                <p>Dashboard / Unggah Berkas</p>
            </header>
            <section class="upload-section">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $uploadDir = 'uploads/';
                        if (!is_dir($uploadDir)) {
                            mkdir($uploadDir, 0777, true);
                        }

                        $allowedExtensions = ['jpg', 'jpeg', 'docx', 'pdf'];
                        foreach ($_FILES as $key => $file) {
                            $fileName = basename($file['name']);
                            $targetFilePath = $uploadDir . $fileName;

                            if ($file['size'] > 100 * 1024 * 1024) {
                                echo "<p>File $fileName terlalu besar! Maksimal ukuran file adalah 100MB.</p>";
                                continue;
                            }

                            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                            if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
                                echo "<p>File $fileName memiliki ekstensi tidak valid!</p>";
                                continue;
                            }

                            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                                echo "<p>File $fileName berhasil diunggah ke $targetFilePath.</p>";
                            } else {
                                echo "<p>Terjadi kesalahan saat mengunggah file $fileName.</p>";
                            }
                        }
                    }
                    ?>
                    <label>File Pembayaran UKT</label>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="file-container">
                            <img src="../../assets/img/aplod.png">
                            <div class="file-info">
                                <input type="file" name="file_ukt" id="fileUKT" required>
                                <p>Ukuran (Max 100 Mb)<br>Ekstensi (.jpg/.docx/.pdf)</p>
                                <button type="submit" name="upload" class="choose-file">Unggah File</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <label>File Peminjaman Buku</label>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="file-container">
                            <img src="../../assets/img/aplod.png">
                            <div class="file-info">
                                <input type="file" name="file_ukt" id="fileUKT" required>
                                <p>Ukuran (Max 100 Mb)<br>Ekstensi (.jpg/.docx/.pdf)</p>
                                <button type="submit" name="upload" class="choose-file">Unggah File</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <label>File Surat Kompen</label>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="file-container">
                            <img src="../../assets/img/aplod.png">
                            <div class="file-info">
                                <input type="file" name="file_ukt" id="fileUKT" required>
                                <p>Ukuran (Max 100 Mb)<br>Ekstensi (.jpg/.docx/.pdf)</p>
                                <button type="submit" name="upload" class="choose-file">Unggah File</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <label>File Tugas Akhir(Skripsi)</label>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="file-container">
                            <img src="../../assets/img/aplod.png">
                            <div class="file-info">
                                <input type="file" name="file_ukt" id="fileUKT" required>
                                <p>Ukuran (Max 100 Mb)<br>Ekstensi (.jpg/.docx/.pdf)</p>
                                <button type="submit" name="upload" class="choose-file">Unggah File</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <label>File Publikasi Ilmiah(Jurnal)</label>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="file-container">
                            <img src="../../assets/img/aplod.png">
                            <div class="file-info">
                                <input type="file" name="file_ukt" id="fileUKT" required>
                                <p>Ukuran (Max 100 Mb)<br>Ekstensi (.jpg/.docx/.pdf)</p>
                                <button type="submit" name="upload" class="choose-file">Unggah File</button>
                            </div>
                        </div>
                    </form>
                    <br>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
