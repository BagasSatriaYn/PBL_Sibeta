<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengajuan Mahasiswa</title>
  <link rel="stylesheet" href="../../../assets/css/pengajuanadmin.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
        <div class="logo">
            <img src="SiBeTa.png" alt="Logo SiBeTa">
          </div>          
      <nav>
        <ul>
          <li><a href="#" class="active">Dashboard</a></li>
          <li><a href="#">Profile</a></li>
        </ul>
      </nav>
      <button class="logout">Logout</button>
    </aside>
    <main class="content">
      <header>
        <h2>Pengajuan Mahasiswa</h2>
        <p>Dashboard / Validasi Berkas</p>
      </header>
      <div class="search-filter">
        <input type="text" class="search" placeholder="Search">
        <button class="filter">Belum Diunggah</button>
      </div>
      <table class="table">
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
          <!-- Example row -->
          <tr>
            <td>1</td>
            <td>2341760071</td>
            <td>Nirza Lailaumi Hidayat</td>
            <td>D-IV SIB</td>
            <td>Selesai</td>
            <td><button class="edit">Masukkan Teks</button></td>
            <td><button class="upload">Unggah</button></td>
          </tr>
          <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
      </table>
      <button class="back">Kembali</button>
    </main>
  </div>
  <footer>
    <p>2024 © SiBeta</p>
  </footer>
</body>
</html>
