<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CoHive | Kelola Operasional dalam Satu Tempat</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="{{ asset('css/cohive-theme.css') }}">
</head>
<body class="cohive-landing">

  <!-- Content Utama -->
  <div class="content-container">
    <div class="content-left">
      <h1>Kelola operasional usaha, lebih mudah dalam satu tempat.</h1>
      <div class="note">
        Atur anggota, jadwal kegiatan, persediaan barang, dan pencatatan keuangan dengan alur kerja yang lebih tertata.
      </div>
      <a href="{{ url('/login') }}">Mulai gunakan CoHive</a>
    </div>
    <div class="content-right">
      <img src="{{ asset('img/Rectangle32.png') }}" alt="Ilustrasi kerja tim secara online"/>
    </div>
  </div>

  <!-- Navbar -->
  <nav>
    <a href="{{ url('/homepage') }}" class="logo">CoHive</a>
    <ul class="nav-links">
      <li><a href="{{ url('/homepage') }}" style="color: #fff">Beranda</a></li>
      <li><a href="#features">Fitur</a></li>
      <li><a href="#modules">Modul</a></li>
      <li><a href="#about">Tentang</a></li>
        <li class="loginRegist">
        <a href="{{ url('/login') }}" class="login-btn">Masuk</a>
        <a href="{{ url('/login') }}" class="signup-btn">Daftar</a>
        </li>
    </ul>
    <div class="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>

  <!-- Section tambahan -->
  <div class="whatIsCoHive" id="about">
    <div class="title">Kenalan dengan <span class="cohive">CoHive</span></div>
    <div class="description">
      CoHive adalah aplikasi pengelolaan operasional untuk membantu tim dan usaha kecil mengatur aktivitas harian. Kelola data anggota, jadwal, stok barang, dan transaksi keuangan dari satu aplikasi.
    </div>
  </div>

  <div class="cards-container">
    <div class="card instructors">
      <div class="overlay">
        <h2>UNTUK PENGELOLA</h2>
        <p>Atur data anggota, persediaan, agenda, dan catatan keuangan tim.</p>
        <a href="{{ url('/login') }}">Masuk sebagai pengelola</a>
      </div>
    </div>

    <div class="card students">
      <div class="overlay">
        <h2>UNTUK ANGGOTA TIM</h2>
        <p>Lihat informasi tim dan agenda kerja melalui satu ruang kerja bersama.</p>
        <a href="{{ url('/login') }}">Masuk ke CoHive</a>
      </div>
    </div>
  </div>

    <section class="feature-section" id="features">
        <div class="hex-container">
            <div class="hex red"></div>
            <div class="hex yellow"></div>
        </div>
        <div class="feature-content">
            <h2>Semua aktivitas penting, lebih terorganisir</h2>
            <p>Kurangi pencatatan yang terpencar dan temukan informasi operasional tim dengan lebih cepat.</p>
        </div>
    </section>


  <div class="shape-container">
    <!-- Bidang hitam -->
    <div class="black-shape"></div>
  </div>

    <!-- Section Baru: Tools for Leaders and Employees -->
    <section class="tools-section">
        <div class="tools-wrapper">
        <!-- Bagian Teks (Kiri) -->
        <div class="tools-text">
            <h2>Kenali <span>anggota dan profil tim</span></h2>
            <p>
            Simpan informasi anggota dalam satu daftar, lihat profil, dan perbarui informasi penting sesuai kebutuhan pengelolaan tim.
            </p>
        </div>

        <!-- Bagian Gambar (Kanan) -->
        <div class="tools-image">
          <div class="workflow-visual workflow-members" aria-hidden="true">
            <div class="visual-topbar"><span></span><span></span><span></span><b>Direktori Anggota</b></div>
            <div class="visual-member"><i class="fa-solid fa-circle-user"></i><span><b>Profil anggota</b><small>Informasi tim tersimpan rapi</small></span><i class="fa-solid fa-check"></i></div>
            <div class="visual-member"><i class="fa-solid fa-circle-user"></i><span><b>Data kontak</b><small>Mudah ditemukan saat dibutuhkan</small></span><i class="fa-solid fa-check"></i></div>
            <div class="visual-foot"><i class="fa-solid fa-users"></i> Data tim dalam satu tempat</div>
          </div>
        </div>
        </div>


        <div class="tools-wrapper">
            <!-- Bagian Gambar (Kanan) -->
            <div class="tools-image">
              <div class="workflow-visual workflow-calendar" aria-hidden="true">
                <div class="visual-topbar"><span></span><span></span><span></span><b>Jadwal Kegiatan</b></div>
                <div class="visual-calendar-head"><i class="fa-regular fa-calendar"></i><b>Agenda tim</b><span>Minggu ini</span></div>
                <div class="visual-event"><span>09:00</span><b>Rapat koordinasi</b><i class="fa-solid fa-circle"></i></div>
                <div class="visual-event"><span>13:30</span><b>Evaluasi mingguan</b><i class="fa-solid fa-circle"></i></div>
                <div class="visual-foot"><i class="fa-regular fa-clock"></i> Atur waktu mulai dan selesai</div>
              </div>
            </div>

            <!-- Bagian Teks (Kiri) -->
            <div class="tools-text" style="padding-left: 50px;">
                <h2>Jadwal kegiatan<span> yang terkoordinasi</span></h2>
                <p>
                    Catat agenda, waktu mulai dan selesai, lalu lihat jadwal kegiatan dalam tampilan kalender agar tim lebih mudah menyelaraskan aktivitas.
                </p>
            </div>
        </div>


        <div class="tools-wrapper">
        <!-- Bagian Teks (Kiri) -->
        <div class="tools-text">
            <h2>Pantau stok dan <span>arus keuangan</span></h2>
            <p>
            Catat barang masuk dan keluar, pantau stok yang perlu diisi ulang, serta hubungkan pencatatan penjualan dengan transaksi keuangan.
            </p>
        </div>

        <!-- Bagian Gambar (Kanan) -->
        <div class="tools-image">
          <div class="workflow-visual workflow-inventory" aria-hidden="true">
            <div class="visual-topbar"><span></span><span></span><span></span><b>Operasional</b></div>
            <div class="visual-stat"><i class="fa-solid fa-boxes-stacked"></i><span><small>Total stok</small><b>Terpantau</b></span><i class="fa-solid fa-arrow-trend-up"></i></div>
            <div class="visual-stat"><i class="fa-solid fa-wallet"></i><span><small>Transaksi</small><b>Tercatat rapi</b></span><i class="fa-solid fa-check"></i></div>
            <div class="visual-foot"><i class="fa-solid fa-arrows-rotate"></i> Stok dan transaksi lebih teratur</div>
          </div>
        </div>
        </div>
    </section>

    <section class="articles-section" id="modules">
        <div class="container">
          <div class="header">
            <div>
              <h2>Modul CoHive</h2>
              <p class="modules-intro">Fitur yang membantu pekerjaan operasional sehari-hari.</p>
            </div>
            <a href="{{ url('/login') }}" class="see-all">Buka CoHive <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="grid">
            <div class="card-1">
              <div class="card-image">
                <div class="module-art module-team"><i class="fa-solid fa-users" aria-hidden="true"></i></div>
              </div>
              <div class="card-body">
                <div class="meta">
                  <span class="category">Tim</span>
                  <span class="duration">Anggota</span>
                </div>
                <h3 class="card-title">Data anggota</h3>
                <p class="card-desc">Simpan daftar anggota dan kelola informasi profil tim dengan lebih mudah.</p>
              </div>
            </div>

            <div class="card-1">
              <div class="card-image">
                <div class="module-art module-calendar"><i class="fa-regular fa-calendar-check" aria-hidden="true"></i></div>
              </div>
              <div class="card-body">
                <div class="meta">
                  <span class="category">Kalender</span>
                  <span class="duration">Agenda</span>
                </div>
                <h3 class="card-title">Jadwal kegiatan</h3>
                <p class="card-desc">Buat agenda, atur waktunya, dan lihat kegiatan tim dalam kalender.</p>
              </div>
            </div>

            <div class="card-1">
              <div class="card-image">
                <div class="module-art module-stock"><i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i></div>
              </div>
              <div class="card-body">
                <div class="meta">
                  <span class="category">Persediaan</span>
                  <span class="duration">Inventaris</span>
                </div>
                <h3 class="card-title">Stok barang</h3>
                <p class="card-desc">Kelola data produk, pantau ketersediaan, dan catat barang masuk maupun keluar.</p>
              </div>
            </div>

            <div class="card-1">
              <div class="card-image">
                <div class="module-art module-finance"><i class="fa-solid fa-wallet" aria-hidden="true"></i></div>
              </div>
              <div class="card-body">
                <div class="meta">
                  <span class="category">Keuangan</span>
                  <span class="duration">Transaksi</span>
                </div>
                <h3 class="card-title">Catatan keuangan</h3>
                <p class="card-desc">Catat transaksi pemasukan dan pengeluaran berdasarkan kategori dan rekening.</p>
              </div>
            </div>
          </div><!-- .grid -->
        </div><!-- .container -->
      </section>


    <footer class="footer">
        <h2 class="cohive-text">CoHive</h2>
        <p class="subscribe-text">Satu ruang kerja untuk mengelola aktivitas operasional tim.</p>
        <a class="footer-cta" href="{{ url('/login') }}">Masuk dan mulai kelola CoHive <i class="fa-solid fa-arrow-right"></i></a>

        <ul class="footer-links">
            <li><a href="#about">Tentang CoHive</a></li>
            <li><a href="#features">Fitur</a></li>
            <li><a href="{{ url('/login') }}">Masuk</a></li>
        </ul>

        <p class="copyright">© {{ date('Y') }} CoHive. Kelola tim dan operasional dengan lebih tertata.</p>
    </footer>



  <script>
    // JavaScript untuk animasi menu burger pada mobile
    const navSlide = () => {
      const burger = document.querySelector('.burger');
      const nav = document.querySelector('.nav-links');
      const navLinks = document.querySelectorAll('.nav-links li');

      burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
          if(link.style.animation) {
            link.style.animation = '';
          } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
          }
        });

        burger.classList.toggle('toggle');
      });
    }
    navSlide();
  </script>

</body>
</html>
