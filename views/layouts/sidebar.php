<?php
// Mulai session jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Ambil role pengguna dari session jika ada
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
?>
<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="../assets/img/SiBeTa.png" alt="navbar brand" class="navbar-brand" height="40" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        
        <?php if ($role === 'admin'): ?>
         <!-- Menu untuk Admin -->
<li class="nav-item">
  <a href="views/pages/dashboardm.php">
    <i class="fas fa-home"></i>
    <p>Dashboard</p>
  </a>
</li>

<li class="nav-item">
  <a data-bs-toggle="collapse" href="#validasiBerkasAkademik">
    <i class="fas fa-folder-open"></i>
    <p>Validasi Berkas Akademik</p>
    <span class="caret"></span>
  </a>
  <div class="collapse" id="validasiBerkasAkademik">
    <ul class="nav nav-collapse">
      <li>
        <a href="validasi-ukt.php">
          <span class="sub-item">Validasi Berkas Pembayaran UKT</span>
        </a>
      </li>
      <li>
        <a href="validasi-kompen.php">
          <span class="sub-item">Validasi Berkas Surat Kompen</span>
        </a>
      </li>
      <li>
        <a href="validasi-skripsi.php">
          <span class="sub-item">Validasi Berkas Tugas Akhir (Skripsi)</span>
        </a>
      </li>
    </ul>
  </div>
</li>


<!-- Validasi Berkas Perpustakaan -->
<li class="nav-item">
  <a href="validasi-perpus.php">
    <i class="fas fa-book"></i>
    <p>Validasi Berkas Perpus</p>
  </a>
</li>

<!-- Validasi Berkas Publikasi Ilmiah -->
<li class="nav-item">
  <a href="validasi-jurnal.php">
    <i class="fas fa-file-alt"></i>
    <p>Validasi Berkas Jurnal</p>
  </a>
</li>

<li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
          </li>

<!-- Profile -->
<li class="nav-item">
  <a href="views/pages/profile.php">
    <i class="fas fa-user"></i>
    <p>Profile</p>
  </a>
</li>



<!-- Logout -->
<li class="nav-item">
  <a href="views/pages/logout.php">
    <i class="fas fa-sign-out-alt"></i>
    <p>Logout</p>
  </a>
</li>

        <?php elseif ($role === 'mahasiswa'): ?>
          <!-- Menu untuk Mahasiswa -->
          <li class="nav-item">
            <a href="../pages/dashboard.php">
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/cek-status.php">
              <i class="fas fa-check-circle"></i>
              <p>Cek Status</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/upload-berkas.php">
              <i class="fas fa-upload"></i>
              <p>Upload Berkas</p>
            </a>
          
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Components</h4>
          </li>
          <li class="nav-item">
            <a href="../pages/profile.php">
              <i class="fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/settings.php">
              <i class="fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/logout.php">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->
