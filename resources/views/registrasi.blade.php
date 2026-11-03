<!DOCTYPE html>
<html lang="id">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Pendaftaran Peserta Didik Baru (PPDB) Online MTs Serpong" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>Pendaftaran PPDB - MTs SERPONG</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="assets/css/lineicons.css" />

  <!--====== Style css ======-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <!--====== NAVBAR PART START ======-->
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <h1 class="text-white h3 mb-0">MTs Serpong</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a href="index.html">Beranda</a>
                </li>
                <li class="nav-item">
                  <a href="index.html#profil">Profil</a>
                </li>
                <li class="nav-item">
                  <a href="index.html#ekstrakurikuler">Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                  <a href="index.html#kontak">Kontak</a>
                </li>
              </ul>
            </div>

            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="btn primary-btn-outline text-white border-white ms-3" href="index.html">Kembali ke Beranda</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--====== NAVBAR PART ENDS ======-->

  <!--====== REGISTER / PPDB SECTION START ======-->
  <section class="contact-section style-register-page">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9">
          <div class="contact-form-wrapper shadow-lg">
            
            <div class="section-title text-center">
              <span>PPDB Online</span>
              <h2 class="fw-bold mt-2">Formulir Pendaftaran Siswa Baru</h2>
              <p>Silakan isi data calon siswa dengan lengkap dan benar untuk pendaftaran di MTs Serpong.</p>
            </div>

            <form action="{{ route('ppdb.store') }}" method="POST" class="contact-form mt-4">
              @csrf

              <!-- Data Calon Siswa -->
              <h5 class="fw-bold mb-3 text-success"><i class="lni lni-user me-2"></i>Data Calon Siswa</h5>
              
              <div class="row">
                <div class="col-md-6">
                  <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap Siswa *</label>
                  <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap" required />
                </div>
                <div class="col-md-6">
                  <label for="nisn" class="form-label fw-semibold">NISN *</label>
                  <input type="text" name="nisn" id="nisn" placeholder="Nomor Induk Siswa Nasional" required />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="tempat_lahir" class="form-label fw-semibold">Tempat Lahir *</label>
                  <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Kota/Kabupaten lahir" required />
                </div>
                <div class="col-md-6">
                  <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir *</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" required />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin *</label>
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-select custom-select-style mb-4" required>
                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="sekolah_asal" class="form-label fw-semibold">Sekolah Asal (SD/MI) *</label>
                  <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Nama SD / MI Asal" required />
                </div>
              </div>

              <hr class="my-4" />

              <!-- Data Orang Tua / Wali -->
              <h5 class="fw-bold mb-3 text-success"><i class="lni lni-users me-2"></i>Data Orang Tua / Wali</h5>

              <div class="row">
                <div class="col-md-6">
                  <label for="nama_ortu" class="form-label fw-semibold">Nama Orang Tua / Wali *</label>
                  <input type="text" name="nama_ortu" id="nama_ortu" placeholder="Nama lengkap Ayah/Ibu/Wali" required />
                </div>
                <div class="col-md-6">
                  <label for="whatsapp" class="form-label fw-semibold">Nomor WhatsApp / HP *</label>
                  <input type="text" name="whatsapp" id="whatsapp" placeholder="Contoh: 081234567890" required />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input type="email" name="email" id="email" placeholder="Alamat Email (Opsional)" />
                </div>
                <div class="col-md-6">
                  <input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua" />
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <label for="alamat" class="form-label fw-semibold">Alamat Lengkap *</label>
                  <textarea name="alamat" id="alamat" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan" rows="3" required></textarea>
                </div>
              </div>

              <!-- Pilihan Akun / Kata Sandi -->
              <hr class="my-4" />
              <h5 class="fw-bold mb-3 text-success"><i class="lni lni-lock me-2"></i>Buat Kata Sandi Akun PPDB</h5>

              <div class="row">
                <div class="col-md-6">
                  <label for="password" class="form-label fw-semibold">Kata Sandi *</label>
                  <input type="password" name="password" id="password" placeholder="Buat kata sandi" required />
                </div>
                <div class="col-md-6">
                  <label for="confirm_password" class="form-label fw-semibold">Konfirmasi Kata Sandi *</label>
                  <input type="password" name="confirm_password" id="confirm_password" placeholder="Ulangi kata sandi" required />
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-12 text-center">
                  <div class="button rounded-buttons">
                    <button type="submit" class="btn primary-btn rounded-full px-5 py-3">
                      <i class="lni lni-checkmark-circle me-1"></i> Kirim Pendaftaran
                    </button>
                  </div>
                  <p class="mt-3 text-muted">Sudah pernah mendaftar? <a href="#login" class="text-success fw-bold">Masuk Akun PPDB</a></p>
                </div>
              </div>

              @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====== REGISTER / PPDB SECTION END ======-->

  <!--====== FOOTER AREA START ======-->
  <footer class="footer-area footer-eleven">
    <div class="footer-top">
      <div class="container">
        <div class="inner-content text-center">
          <p class="copyright-text">
            <span>© 2026 MTs Serpong.</span> Hak Cipta Dilindungi Undang-Undang.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--====== FOOTER AREA END ======-->

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== JS ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>