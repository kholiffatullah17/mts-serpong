<!DOCTYPE html>
<html lang="id">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Dashboard Admin - MTs Serpong" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>Dashboard Admin - MTs SERPONG</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="assets/css/lineicons.css" />

  <!--====== DataTables Bootstrap 5 CSS ======-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

  <!--====== Style css ======-->
  <link rel="stylesheet" href="style.css" />

  <style>
    /* Admin Custom Styling */
    body {
      background-color: var(--light-2);
    }

    .admin-wrapper {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar Admin */
    .admin-sidebar {
      width: 260px;
      background-color: var(--primary);
      color: var(--white);
      flex-shrink: 0;
      transition: all 0.3s ease;
    }

    .admin-sidebar .sidebar-brand {
      padding: 20px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .admin-sidebar .nav-link {
      color: rgba(255, 255, 255, 0.8);
      padding: 12px 20px;
      font-size: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.2s;
    }

    .admin-sidebar .nav-link:hover,
    .admin-sidebar .nav-link.active {
      color: var(--white);
      background-color: rgba(255, 255, 255, 0.15);
      border-left: 4px solid var(--accent);
    }

    /* Main Content */
    .admin-content {
      flex-grow: 1;
      padding: 25px;
      overflow-x: hidden;
    }

    .stat-card {
      background: var(--white);
      border-radius: 10px;
      padding: 20px;
      box-shadow: var(--shadow-1);
      border-left: 5px solid var(--primary);
      transition: transform 0.2s;
    }

    .stat-card:hover {
      transform: translateY(-3px);
    }

    .stat-card .stat-icon {
      width: 48px;
      height: 48px;
      border-radius: 8px;
      background: var(--primary-light);
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
    }

    .table-card {
      background: var(--white);
      border-radius: 10px;
      padding: 20px;
      box-shadow: var(--shadow-1);
      margin-bottom: 25px;
    }

    /* Custom style DataTables pagination */
    .page-item.active .page-link {
      background-color: var(--primary);
      border-color: var(--primary);
    }

    @media (max-width: 991px) {
      .admin-wrapper {
        flex-direction: column;
      }
      .admin-sidebar {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <div class="admin-wrapper">
    <!-- Sidebar Admin Start -->
    <aside class="admin-sidebar">
      <div class="sidebar-brand">
        <h4 class="text-white fw-bold m-0"><i class="lni lni-graduation me-2"></i>MTs Serpong</h4>
        <small class="text-white-50">Panel Administrasi</small>
      </div>

      <ul class="nav flex-column my-3">
        <li class="nav-item">
          <a class="nav-link active" href="#dashboard"><i class="lni lni-grid-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pendaftaran"><i class="lni lni-users"></i> Data PPDB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#berita"><i class="lni lni-newspaper"></i> Kelola Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pengajar"><i class="lni lni-user"></i> Data Pengajar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pengaturan"><i class="lni lni-cog"></i> Pengaturan Website</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link text-warning" href="index.html"><i class="lni lni-exit"></i> Keluar / Ke Website</a>
        </li>
      </ul>
    </aside>
    <!-- Sidebar Admin End -->

    <!-- Main Content Start -->
    <main class="admin-content">
      
      <!-- Header Topbar -->
      <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded shadow-sm">
        <div>
          <h4 class="fw-bold m-0 text-dark-1">Dashboard Administrasi</h4>
          <small class="text-muted">Selamat datang kembali, <strong>Admin PPDB</strong></small>
        </div>
        <div class="d-flex align-items-center gap-3">
          <span class="badge bg-success py-2 px-3">Tahun Ajaran 2026/2027</span>
          <img src="Potret Profesional Pria Berkacamata.png" alt="Admin" class="rounded-circle" width="40" height="40" style="object-fit: cover;">
        </div>
      </div>

      <!-- Cards Statistik -->
      <div class="row g-3 mb-4">
        <div class="col-md-3">
          <div class="stat-card d-flex justify-content-between align-items-center">
            <div>
              <small class="text-muted">Total Pendaftar</small>
              <h3 class="fw-bold m-0 mt-1">128</h3>
            </div>
            <div class="stat-icon">
              <i class="lni lni-users"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="stat-card d-flex justify-content-between align-items-center" style="border-left-color: #13d527;">
            <div>
              <small class="text-muted">Lulus Seleksi</small>
              <h3 class="fw-bold m-0 mt-1 text-success">85</h3>
            </div>
            <div class="stat-icon bg-light-success text-success">
              <i class="lni lni-checkmark-circle"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="stat-card d-flex justify-content-between align-items-center" style="border-left-color: #dbbb25;">
            <div>
              <small class="text-muted">Menunggu Verifikasi</small>
              <h3 class="fw-bold m-0 mt-1 text-warning">32</h3>
            </div>
            <div class="stat-icon bg-light-warning text-warning">
              <i class="lni lni-timer"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="stat-card d-flex justify-content-between align-items-center" style="border-left-color: #e6185e;">
            <div>
              <small class="text-muted">Total Berita</small>
              <h3 class="fw-bold m-0 mt-1 text-danger">14</h3>
            </div>
            <div class="stat-icon bg-light-danger text-danger">
              <i class="lni lni-paperclip"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabel Data Pendaftaran PPDB Terbaru dengan DataTables -->
      <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="fw-bold m-0"><i class="lni lni-users me-2 text-primary"></i>Pendaftaran Siswa Baru</h5>
          <button class="btn primary-btn btn-sm"><i class="lni lni-download me-1"></i> Export Data Excel</button>
        </div>

        <div class="table-responsive">
          <table id="tablePPDB" class="table table-striped table-hover align-middle w-100">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Sekolah Asal</th>
                <th>No. WhatsApp</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>0081234567</td>
                <td>Muhammad Rizky</td>
                <td>SDN Serpong 01</td>
                <td>081298765432</td>
                <td><span class="badge bg-success">Diterima</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-1" title="Detail"><i class="lni lni-eye"></i></button>
                  <button class="btn btn-sm btn-warning text-white me-1" title="Edit"><i class="lni lni-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="lni lni-trash-can"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>0087654321</td>
                <td>Aisyah Nur Syafiqah</td>
                <td>MI Nurul Huda</td>
                <td>085712345678</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-1" title="Detail"><i class="lni lni-eye"></i></button>
                  <button class="btn btn-sm btn-warning text-white me-1" title="Edit"><i class="lni lni-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="lni lni-trash-can"></i></button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>0081122334</td>
                <td>Ahmad Fauzi</td>
                <td>SDN Rawa Buntu 02</td>
                <td>081344556677</td>
                <td><span class="badge bg-danger">Ditolak</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-1" title="Detail"><i class="lni lni-eye"></i></button>
                  <button class="btn btn-sm btn-warning text-white me-1" title="Edit"><i class="lni lni-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="lni lni-trash-can"></i></button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>0089988776</td>
                <td>Siti Nurhaliza</td>
                <td>SDIT Al-Azhar</td>
                <td>081233445566</td>
                <td><span class="badge bg-success">Diterima</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-1" title="Detail"><i class="lni lni-eye"></i></button>
                  <button class="btn btn-sm btn-warning text-white me-1" title="Edit"><i class="lni lni-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="lni lni-trash-can"></i></button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>0085544332</td>
                <td>Bintang Pratama</td>
                <td>SDN Serpong 03</td>
                <td>085611223344</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-1" title="Detail"><i class="lni lni-eye"></i></button>
                  <button class="btn btn-sm btn-warning text-white me-1" title="Edit"><i class="lni lni-pencil"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="lni lni-trash-can"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Kelola Berita / Artikel dengan DataTables -->
      <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h5 class="fw-bold m-0"><i class="lni lni-newspaper me-2 text-primary"></i>Kelola Berita & Kegiatan</h5>
          <button class="btn primary-btn btn-sm"><i class="lni lni-plus me-1"></i> Tambah Berita</button>
        </div>

        <div class="table-responsive">
          <table id="tableBerita" class="table table-striped table-hover align-middle w-100">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Kategori</th>
                <th>Tanggal Upload</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Kegiatan Peringatan Hari Besar Islam di Madrasah</td>
                <td><span class="badge bg-info text-dark">Kegiatan</span></td>
                <td>20 Oktober 2026</td>
                <td>
                  <button class="btn btn-sm btn-warning text-white me-1"><i class="lni lni-pencil"></i> Edit</button>
                  <button class="btn btn-sm btn-danger"><i class="lni lni-trash-can"></i> Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Siswa MTs Serpong Meraih Juara Kompetisi Sains</td>
                <td><span class="badge bg-success">Prestasi</span></td>
                <td>18 Oktober 2026</td>
                <td>
                  <button class="btn btn-sm btn-warning text-white me-1"><i class="lni lni-pencil"></i> Edit</button>
                  <button class="btn btn-sm btn-danger"><i class="lni lni-trash-can"></i> Hapus</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Pelaksanaan Penilaian Akhir Semester Berjalan Lancar</td>
                <td><span class="badge bg-secondary">Akademik</span></td>
                <td>15 Oktober 2026</td>
                <td>
                  <button class="btn btn-sm btn-warning text-white me-1"><i class="lni lni-pencil"></i> Edit</button>
                  <button class="btn btn-sm btn-danger"><i class="lni lni-trash-can"></i> Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>
    <!-- Main Content End -->
  </div>

  <!--====== JS Dependencies ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  
  <!-- jQuery & DataTables JS CDN -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <!-- Inisialisasi DataTables -->
  <script>
    $(document).ready(function () {
      // Inisialisasi Tabel PPDB
      $('#tablePPDB').DataTable({
        language: {
          url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json' // Bahasa Indonesia
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50]
      });

      // Inisialisasi Tabel Berita
      $('#tableBerita').DataTable({
        language: {
          url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json' // Bahasa Indonesia
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50]
      });
    });
  </script>
</body>

</html>