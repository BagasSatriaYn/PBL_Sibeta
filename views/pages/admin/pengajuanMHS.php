<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Mahasiswa</title>
    <link rel="stylesheet" href="../../../assets/css/mahasiswa.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>SiBeTa</h2>
            <nav>
                <ul>
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </nav>
            <button class="logout">Logout</button>
        </aside>
        <main>
            <header>
                <h1>Pengajuan Mahasiswa</h1>
                <p>Dashboard / Validasi Berkas</p>
            </header>
            <div class="content">
                <div class="search-bar">
                    <input type="text" placeholder="Cari...">
                    <select>
                        <option>Belum Diunggah</option>
                        <option>Sudah Diunggah</option>
                    </select>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Status</th>
                            <th>Catatan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Data mahasiswa dalam bentuk array
                        $mahasiswa = [
                            ["no" => 1, "nim" => "2341760071", "nama" => "Nitiza Lailatul Hidayat", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 2, "nim" => "2341760072", "nama" => "Adinda Ivanka M P", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 3, "nim" => "2341760073", "nama" => "Adiyuta Raksa R", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 4, "nim" => "2341760074", "nama" => "Aqueenqa Regita H", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 5, "nim" => "2341760075", "nama" => "Bagas Satriya Y N", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 6, "nim" => "2341760076", "nama" => "Maharani Wirawan", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 7, "nim" => "2341760077", "nama" => "Queendhaynar", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 8, "nim" => "2341760078", "nama" => "Renaldi Agustinus", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 9, "nim" => "2341760079", "nama" => "Yusar Yusuf", "prodi" => "D-IV SIB", "status" => "Selesai"],
                            ["no" => 10, "nim" => "2341760080", "nama" => "Zaki Erlangga", "prodi" => "D-IV SIB", "status" => "Selesai"],
                        ];

                        // Loop untuk menampilkan data dalam tabel
                        foreach ($mahasiswa as $mhs) {
                            echo "<tr>";
                            echo "<td>{$mhs['no']}</td>";
                            echo "<td>{$mhs['nim']}</td>";
                            echo "<td>{$mhs['nama']}</td>";
                            echo "<td>{$mhs['prodi']}</td>";
                            echo "<td>{$mhs['status']}</td>";
                            echo '<td><button class="edit">Masukkan Teks</button></td>';
                            echo '<td><button class="upload">Unggah</button></td>';
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <button class="back">Kembali</button>
            </div>
        </main>
    </div>
</body>
</html>
