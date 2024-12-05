<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiBeTa - Validasi Berkas</title>
  <link rel="stylesheet" href="../../../assets/css/berkas.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <img src="SiBeTa.png" alt="Logo SiBeTa">
      </div>
      
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
        <h1>Validasi Berkas</h1>
        <p>Dashboard / Validasi Berkas</p>
      </header>

      <div class="filters">
        <input type="text" placeholder="Cari...">
        <button>Status Pengajuan <span>▼</span></button>
        <button>Pembayaran UKT <span>▼</span></button>
      </div>

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
          <tr>
            <td>1</td>
            <td>Niriza Lailatuazmi</td>
            <td>234176001</td>
            <td>DIV SIB</td>
            <td><a href="bayarUKT.pdf" target="_blank">bayarUKT.pdf</a></td>
            <td>
              Proses
              <button class="edit"><img src="edit-icon.png" alt="Edit"></button>
            </td>
          </tr>
          <tr>
            <td colspan="6"></td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>

  <footer>
    2024 &copy; SiBeta
  </footer>
</body>
</html>
