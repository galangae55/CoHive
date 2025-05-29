<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CoHive - Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="homepage.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    *{margin:0;padding:0;box-sizing:border-box;font-family:Poppins,sans-serif;}
    body{background:#f3f4f6;color:#374151;}
    .wrapper{display:flex;min-height:100vh;padding:15px 15px 15px 0;gap:15px;}
    .sidebar{width:280px;border:1px solid #ddd;border-radius:0 12px 12px 0;background:#fff;padding:20px;}
    .profile{text-align:center;margin-bottom:20px;}
    .profile img{width:80px;height:80px;border-radius:50%;object-fit:cover;}
    .profile h3{margin-top:10px;font-size:18px;}
    .profile p{font-size:14px;color:#666;}
    .garis{width:100%;height:1px;background:#ddd;margin:25px 0 35px;}
    .menu{list-style:none;padding:0;}
    .menu li{margin-bottom:10px;}
    .menu a{display:flex;align-items:center;text-decoration:none;padding:9px 18px;border-radius:10px;font-size:13px;color:#000;background:#FFD54F;font-weight:bold;}
    .menu a:hover{background:#333;color:#fff;}
    .menu .dash{background:#333;color:#fff;}
    .main-container{flex:1;display:flex;flex-direction:column;gap:15px;}
    .header{display:flex;justify-content:space-between;align-items:center;padding:20px;background:#fff;border:1px solid #ddd;border-radius:12px;}
    .header h1{font-size:24px;color:#FFD54F;}
    .logout-btn{font-weight:bold;color:#000;font-size:16px;text-decoration:none;}
    .content{flex:1;padding:30px;background:#fff;border:1px solid #ddd;border-radius:12px;}
    .info-cards{display:flex;flex-wrap:wrap;gap:20px;margin-bottom:20px;}
    .info-card{flex:1;min-width:220px;background:#fff;border:2px solid #A6A6A6;border-radius:10px;padding:15px;}
    .info-card h3{font-size:20px;margin-bottom:5px;font-weight:600;color:#000;}
    .info-card p{font-size:30px;font-weight:700;margin-bottom:5px;color:#000;}
    .info-card span{font-size:14px;color:#858D9D;}
    .info-card.red h3{color:#FF0000;}
    .row{display:flex;gap:20px;margin-bottom:20px;}
    .card{flex:1;background:#fff;border-radius:10px;padding:15px;}
    .list-group{list-style:none;padding:0;}
    .list-group-item{padding:10px;border-bottom:1px solid #eee;display:flex;justify-content:space-between;}
    .badge{padding:3px 8px;border-radius:12px;font-size:12px;color:#fff;}
    .badge-success{background:#28a745;}
    .badge-danger{background:#dc3545;}
    .btn{padding:6px 12px;border:none;border-radius:5px;cursor:pointer;}
    .btn-sm{font-size:12px;}
    .btn-primary{background:#2563eb;color:#fff;}
    .btn-secondary{background:#6c757d;color:#fff;}
    .btn-link{background:transparent;color:#007bff;text-decoration:underline;}
    .table{width:100%;border-collapse:collapse;}
    .table th,.table td{padding:8px;border:1px solid #ddd;text-align:left;}
  </style>
</head>
<body>
<div class="wrapper">
  <div class="sidebar">
    <div class="profile">
      <img src="https://via.placeholder.com/80" alt="Foto Profil">
      <h3>John Doe</h3>
      <p>Admin</p>
      <div class="garis"></div>
    </div>
    <ul class="menu">
      <li><a href="#" class="dash"><i class="fa fa-desktop"></i><span class="menu-text">Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-users"></i><span class="menu-text">Daftar Anggota</span></a></li>
      <li><a href="#"><i class="fa fa-calendar-alt"></i><span class="menu-text">Jadwal Anggota</span></a></li>
      <li><a href="#"><i class="fa fa-box"></i><span class="menu-text">Stok Barang</span></a></li>
      <li><a href="#"><i class="fa fa-money-bill-wave"></i><span class="menu-text">Catatan Keuangan</span></a></li>
      <li><a href="#"><i class="fa fa-user"></i><span class="menu-text">Profile</span></a></li>
    </ul>
  </div>
  <div class="main-container">
    <div class="header">
      <h1>CoHive</h1>
      <a href="#" class="logout-btn"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="content">
      <h2>Dashboard</h2>

      <div class="info-cards">
        <div class="info-card"><h3>Kategori Barang</h3><p>12</p><span>Last 7 days</span></div>
        <div class="info-card"><h3>Total Barang Masuk</h3><p>150</p><span>Last 7 days</span><p>Rp 5.000.000</p></div>
        <div class="info-card"><h3>Barang Keluar</h3><p>120</p><span>Last 7 days</span><p>Rp 4.200.000</p></div>
        <div class="info-card red"><h3>Stok Rendah</h3><p>5</p><span>Dipesan</span><p>Tersedia: 2</p></div>
      </div>

      <div class="info-cards">
        <div class="info-card"><h3>Total Produk</h3><p>30</p><span>SKU</span></div>
        <div class="info-card"><h3>Total Stok</h3><p>380</p><span>Unit</span></div>
        <div class="info-card"><h3>Pendapatan (MTD)</h3><p>Rp 12.000.000</p><span>MTD</span></div>
        <div class="info-card"><h3>Pengeluaran (MTD)</h3><p>Rp 8.000.000</p><span>MTD</span></div>
        <div class="info-card red"><h3>Laba/Rugi</h3><p>Rp 4.000.000</p><span>Bersih</span></div>
      </div>

      <!-- Tambahkan ke bagian .content menggantikan <div class="row"> yang sebelumnya -->
        <div class="row">
            <!-- KIRI: JADWAL -->
            <div class="card" style="flex:1; background:#f0f0f0; padding:20px;">
              <h3 style="font-size:20px; margin-bottom:15px;">🗓️ Jadwal Kegiatan</h3>
              <div style="margin-bottom:20px;">
                <h4 style="font-size:16px; margin-bottom:10px;">Hari Ini (Rabu, 29 Mei 2025)</h4>
                <ul class="list-group">
                  <li class="list-group-item">
                    <span>09:00 – Meeting Tim</span>
                    <span class="badge badge-success">Publik</span>
                  </li>
                  <li class="list-group-item">
                    <span>13:00 – Update Sistem</span>
                    <span class="badge badge-danger">Privat</span>
                  </li>
                </ul>
                <button class="btn btn-primary btn-sm mt-2">+ Tambah Agenda</button>
              </div>
              <div>
                <h4 style="font-size:16px; margin-bottom:10px;">Jadwal Minggu Ini</h4>
                <ul class="list-group">
                  <li class="list-group-item">Senin – Rapat Internal – 10:00</li>
                  <li class="list-group-item">Jumat – Evaluasi Proyek – 14:00</li>
                </ul>
                <button class="btn btn-link btn-sm mt-2">Lihat Semua</button>
              </div>
            </div>

            <!-- KANAN: LOW STOCK + DAFTAR PRODUK -->
            <div style="flex:1; display:flex; flex-direction:column; gap:20px;">
              <!-- LOW STOCK -->
              <div class="card">
                <h4>Low Stock Alerts</h4>
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>Stok</th>
                      <th>Reorder Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>Masker</td><td>3</td><td>10</td></tr>
                    <tr><td>Sabun</td><td>2</td><td>5</td></tr>
                  </tbody>
                </table>
              </div>

              <!-- DAFTAR PRODUK -->
              <div class="card">
                <div class="produk-header d-flex justify-content-between align-items-center mb-2">
                  <h3>Daftar Produk</h3>
                  <button class="btn btn-secondary btn-sm">Lihat Aktivitas</button>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th><th>ID</th><th>Nama</th><th>Varian</th><th>Stok</th>
                      <th>Tgl Masuk</th><th>Harga Beli</th><th>Harga Jual</th><th>Exp</th><th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td><td>PRD001</td><td>Sabun Cair</td><td>Botol</td><td>15</td>
                      <td>25-05-2025</td><td>Rp 10.000</td><td>Rp 15.000</td><td>25-12-2025</td>
                      <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td><td>PRD002</td><td>Masker Medis</td><td>Pcs</td><td>3</td>
                      <td>26-05-2025</td><td>Rp 1.000</td><td>Rp 2.000</td><td>01-01-2026</td>
                      <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
</body>
</html>
