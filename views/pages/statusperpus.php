<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiBeTa - Status Peminjaman Buku</title>
  <link rel="stylesheet" href="../../assets/css/statusperpus.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2 class="app-title">SiBeTa</h2>
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
        <h1>Detail</h1>
        <p>Dashboard / Status / Perpustakaan</p>
      </header>
      <section class="table-section">
        <h2>Status Peminjaman Buku</h2>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Pengembalian</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Akuntansi Dasar</td>
              <td>22 Desember 2023</td>
              <td>25 Desember 2023</td>
              <td>Lunas</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Sistem Informasi</td>
              <td>23 Desember 2023</td>
              <td>26 Desember 2023</td>
              <td>Lunas</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Fisika Terapan</td>
              <td>24 Desember 2023</td>
              <td>27 Desember 2023</td>
              <td>Lunas</td>
            </tr>
          </tbody>
        </table>
        <button class="back-button">Kembali</button>
      </section>
    </main>
  </div>
</body>
</html>
