<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | CoHive</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      color-scheme: light;
      --ink: #22241f;
      --muted: #777a72;
      --line: #e9e7df;
      --surface: #fff;
      --canvas: #f7f6f2;
      --yellow: #ffd54f;
      --yellow-dark: #e6b91e;
      --navy: #24251f;
      --red: #d94b4b;
      --green: #23845b;
      font-family: Poppins, sans-serif;
    }
    * { box-sizing: border-box; }
    body { margin: 0; background: var(--canvas); color: var(--ink); }
    a { color: inherit; }
    .app { display: flex; min-height: 100vh; }
    .sidebar {
      position: sticky; top: 0; width: 250px; height: 100vh; flex: 0 0 250px; padding: 28px 18px;
      background: var(--navy); color: #fff; box-shadow: 8px 0 30px #22241f0a;
    }
    .brand { display: flex; align-items: center; gap: 12px; margin: 0 10px 34px; color: #fff; font-size: 21px; font-weight: 700; letter-spacing: -.04em; text-decoration: none; }
    .brand-mark { display: grid; width: 38px; height: 38px; place-items: center; border-radius: 12px; background: var(--yellow); color: var(--navy); }
    .account { display: flex; align-items: center; gap: 12px; margin: 0 8px 30px; padding: 14px 10px; min-width: 0; border: 1px solid #ffffff14; border-radius: 14px; background: #ffffff08; }
    .avatar { display: grid; width: 42px; height: 42px; flex: 0 0 42px; place-items: center; border: 2px solid #ffffff24; border-radius: 50%; background: var(--yellow); color: #30270c; font-weight: 700; }
    .account-info { min-width: 0; }
    .account-info strong, .account-info span { display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .account-info strong { color: #fff; font-size: 12px; }
    .account-info span { margin-top: 3px; color: #b7b8b2; font-size: 10px; text-transform: capitalize; }
    .nav-label { margin: 0 12px 12px; color: #9c9e96; font-size: 9px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; }
    .menu { display: grid; gap: 7px; margin: 0; padding: 0; list-style: none; }
    .menu a { display: flex; align-items: center; gap: 13px; padding: 12px 14px; border: 1px solid transparent; border-radius: 10px; color: #c3c4bd; font-size: 12px; font-weight: 500; text-decoration: none; transition: background .18s, color .18s, transform .18s; }
    .menu a:hover { transform: translateX(2px); background: #ffffff0d; color: #fff; }
    .menu a:hover, .menu a.active { border-color: #ffd54f26; background: #ffd54f; color: #24251f; }
    .menu a.active { font-weight: 600; }
    .menu i { width: 18px; text-align: center; }
    .main { min-width: 0; flex: 1; padding: 28px clamp(18px, 4vw, 52px) 48px; }
    .topbar { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 24px; }
    .eyebrow { display: block; margin-bottom: 5px; color: #999b93; font-size: 9px; font-weight: 600; letter-spacing: .14em; text-transform: uppercase; }
    .topbar h1 { margin: 0; font-size: clamp(21px, 3vw, 26px); letter-spacing: -.04em; }
    .topbar p { margin: 5px 0 0; color: var(--muted); font-size: 11px; }
    .top-actions { display: flex; align-items: center; gap: 10px; }
    .today { color: var(--muted); font-size: 11px; }
    .logout { display: inline-flex; align-items: center; gap: 9px; padding: 10px 14px; border: 1px solid var(--line); border-radius: 10px; background: var(--surface); color: var(--ink); font-size: 11px; font-weight: 600; text-decoration: none; transition: all .18s; }
    .logout:hover { border-color: #efbcbc; background: #fff8f7; color: var(--red); }
    .welcome { position: relative; display: flex; align-items: center; justify-content: space-between; gap: 24px; min-height: 154px; overflow: hidden; margin-bottom: 24px; padding: 28px 32px; border-radius: 20px; background: var(--yellow); box-shadow: 0 12px 24px #9a74121a; }
    .welcome::before, .welcome::after { position: absolute; right: 12%; width: 210px; height: 210px; border: 1px solid #24251f12; border-radius: 50%; content: ""; pointer-events: none; }
    .welcome::before { top: -135px; }
    .welcome::after { right: 5%; bottom: -170px; width: 270px; height: 270px; }
    .welcome-copy, .welcome-actions { position: relative; z-index: 1; }
    .welcome-copy span { color: #5a4b16; font-size: 10px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
    .welcome-copy h2 { max-width: 560px; margin: 8px 0 7px; color: #24251f; font-size: clamp(22px, 3vw, 30px); letter-spacing: -.05em; line-height: 1.2; }
    .welcome-copy p { margin: 0; color: #5f552f; font-size: 11px; }
    .welcome-actions { display: flex; flex: 0 0 auto; gap: 9px; }
    .welcome-button { display: inline-flex; align-items: center; gap: 8px; padding: 11px 14px; border: 1px solid #24251f; border-radius: 10px; background: #24251f; color: #fff; font-size: 10px; font-weight: 600; text-decoration: none; transition: transform .18s, background .18s; }
    .welcome-button:hover { transform: translateY(-2px); background: #383a31; }
    .welcome-button.secondary { border-color: #24251f38; background: #ffffff85; color: #24251f; }
    .welcome-button.secondary:hover { background: #fff; }
    .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 12px; margin: 0 0 12px; }
    .section-heading h2 { margin: 0; font-size: 14px; letter-spacing: -.02em; }
    .section-heading p { margin: 4px 0 0; color: var(--muted); font-size: 10px; }
    .metrics { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 13px; margin-bottom: 24px; }
    .metric { position: relative; display: block; min-width: 0; overflow: hidden; padding: 17px 18px 16px; border: 1px solid var(--line); border-radius: 14px; background: var(--surface); text-decoration: none; box-shadow: 0 4px 14px #24251f05; transition: transform .18s, box-shadow .18s, border-color .18s; }
    .metric::before { position: absolute; top: 0; left: 0; width: 3px; height: 100%; background: var(--yellow-dark); content: ""; opacity: 0; transition: opacity .18s; }
    .metric:hover { transform: translateY(-3px); border-color: #e4d59e; box-shadow: 0 10px 25px #24251f0d; }
    .metric:hover::before { opacity: 1; }
    .metric-head { display: flex; align-items: center; justify-content: space-between; gap: 10px; color: var(--muted); font-size: 10px; font-weight: 500; }
    .metric-icon { display: grid; width: 34px; height: 34px; place-items: center; border-radius: 11px; background: #fff5d2; color: #725b0c; }
    .metric-value { display: block; margin-top: 11px; font-size: clamp(21px, 2.5vw, 27px); font-weight: 700; letter-spacing: -.04em; line-height: 1.2; overflow-wrap: anywhere; }
    .metric-note { display: block; margin-top: 6px; color: var(--muted); font-size: 9px; }
    .metric.alert { border-color: #f1dfd9; }
    .metric.alert::before { background: var(--red); opacity: 1; }
    .metric.alert .metric-icon { background: #fff0ef; color: var(--red); }
    .panels { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); align-items: start; gap: 16px; }
    .panel { min-width: 0; overflow: hidden; border: 1px solid var(--line); border-radius: 15px; background: var(--surface); box-shadow: 0 5px 18px #24251f05; }
    .panel-head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 17px 19px; border-bottom: 1px solid #f0eee8; }
    .panel-head h2 { margin: 0; font-size: 13px; letter-spacing: -.02em; }
    .panel-link { flex: 0 0 auto; color: #79600a; font-size: 10px; font-weight: 600; text-decoration: none; }
    .panel-link:hover { text-decoration: underline; }
    .event-list, .stock-list { margin: 0; padding: 4px 19px; list-style: none; }
    .event-list li, .stock-list li { display: flex; align-items: center; justify-content: space-between; gap: 14px; padding: 12px 0; border-bottom: 1px solid #f0eee8; }
    .event-list li:last-child, .stock-list li:last-child { border-bottom: 0; }
    .event-name, .stock-name { min-width: 0; }
    .event-name strong, .stock-name strong { display: block; overflow: hidden; font-size: 11px; font-weight: 600; text-overflow: ellipsis; white-space: nowrap; }
    .event-name span, .stock-name span { display: block; margin-top: 4px; color: var(--muted); font-size: 9px; }
    .event-time { flex: 0 0 auto; padding: 6px 9px; border-radius: 8px; background: #f7f6f2; color: #555d6c; font-size: 10px; font-weight: 600; }
    .stock-count { flex: 0 0 auto; padding: 6px 9px; border-radius: 8px; background: #fff0ef; color: var(--red); font-size: 9px; font-weight: 600; }
    .empty { padding: 26px 20px; color: var(--muted); font-size: 11px; text-align: center; }
    .table-wrap { overflow-x: auto; }
    table { width: 100%; border-collapse: collapse; text-align: left; }
    th, td { padding: 12px 16px; border-bottom: 1px solid #f0eee8; font-size: 10px; white-space: nowrap; }
    th { background: #fbfaf7; color: var(--muted); font-size: 9px; font-weight: 600; letter-spacing: .06em; }
    tbody tr { transition: background .15s; }
    tbody tr:hover { background: #fffdf6; }
    tbody tr:last-child td { border-bottom: 0; }
    .stock-status { color: var(--green); font-size: 9px; font-weight: 600; }
    .stock-status.low { color: var(--red); }
    .columns { min-width: 0; }
    .products-panel { grid-column: 1 / -1; }
    @media (max-width: 1050px) {
      .sidebar { width: 220px; flex-basis: 220px; }
      .metrics { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .panels { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .products-panel { grid-column: 1 / -1; }
      .welcome { align-items: flex-start; flex-direction: column; }
    }
    @media (max-width: 680px) {
      .app { display: block; }
      .sidebar { position: static; width: auto; height: auto; padding: 14px; border-right: 0; border-bottom: 0; }
      .brand { margin: 0 4px 14px; }
      .account, .nav-label { display: none; }
      .menu { display: flex; gap: 6px; overflow-x: auto; }
      .menu li { flex: 0 0 auto; }
      .menu a { padding: 10px; font-size: 0; }
      .menu a i { width: 20px; font-size: 14px; }
      .main { padding: 20px 14px 32px; }
      .topbar { align-items: flex-start; }
      .today { display: none; }
      .logout { padding: 9px 10px; font-size: 0; }
      .logout i { font-size: 13px; }
      .welcome { min-height: 0; gap: 18px; margin-bottom: 20px; padding: 22px 20px; border-radius: 16px; }
      .welcome-actions { flex-wrap: wrap; }
      .welcome-button { padding: 10px 12px; }
      .metrics { gap: 9px; }
      .metric { padding: 13px; border-radius: 12px; }
      .metric-head { align-items: flex-start; font-size: 10px; }
      .metric-icon { width: 30px; height: 30px; flex: 0 0 30px; font-size: 12px; }
      .metric-note { font-size: 10px; }
      .panels { grid-template-columns: minmax(0, 1fr); }
      .products-panel { grid-column: auto; }
    }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; }
    }
  </style>
  <link rel="stylesheet" href="{{ asset('css/cohive-theme.css') }}">
</head>
<body class="cohive-app">
<div class="app">
  <aside class="sidebar">
    <a class="brand" href="{{ url('/') }}">
      <span class="brand-mark"><i class="fa-solid fa-hexagon"></i></span>
      <span>CoHive</span>
    </a>
    <div class="account">
      <div class="avatar" aria-hidden="true">{{ strtoupper(substr($profile->name ?: $users->username, 0, 1)) }}</div>
      <div class="account-info">
        <strong>{{ $profile->name ?: $users->username }}</strong>
        <span>{{ $users->role }}</span>
      </div>
    </div>
    <p class="nav-label">Menu utama</p>
    <nav aria-label="Navigasi utama">
      <ul class="menu">
        <li><a href="{{ url('/') }}" class="active" aria-current="page"><i class="fa-solid fa-chart-pie"></i>Dashboard</a></li>
        <li><a href="{{ url('/anggota') }}"><i class="fa-solid fa-users"></i>Daftar Anggota</a></li>
        <li><a href="{{ route('jadwal') }}"><i class="fa-regular fa-calendar"></i>Jadwal Anggota</a></li>
        <li><a href="{{ url('/stok-barang') }}"><i class="fa-solid fa-box"></i>Stok Barang</a></li>
        <li><a href="{{ url('/keuangan') }}"><i class="fa-solid fa-wallet"></i>Catatan Keuangan</a></li>
        <li><a href="{{ url('/profile') }}"><i class="fa-regular fa-user"></i>Profil</a></li>
      </ul>
    </nav>
  </aside>

  <main class="main">
    <header class="topbar">
      <div>
        <span class="eyebrow">CoHive workspace</span>
        <h1>Ringkasan</h1>
        <p>Informasi penting bisnis Anda, tersusun dalam satu tempat.</p>
      </div>
      <div class="top-actions">
        <span class="today">{{ now()->format('d/m/Y') }}</span>
        <a class="logout" href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i>Keluar</a>
      </div>
    </header>

    <section class="welcome">
      <div class="welcome-copy">
        <span>Selamat datang kembali</span>
        <h2>{{ $profile->name ?: $users->username }}</h2>
        <p>Semoga harimu produktif. Ini ringkasan terbaru ruang kerja CoHive-mu.</p>
      </div>
      <div class="welcome-actions">
        <a class="welcome-button" href="{{ url('/stok-barang') }}"><i class="fa-solid fa-box-open"></i>Kelola stok</a>
        <a class="welcome-button secondary" href="{{ route('jadwal') }}"><i class="fa-regular fa-calendar-plus"></i>Lihat jadwal</a>
      </div>
    </section>

    <div class="section-heading">
      <div>
        <h2>Ikhtisar bisnis</h2>
        <p>Angka terkini dari data yang tersimpan di CoHive.</p>
      </div>
    </div>
    <section class="metrics" aria-label="Ringkasan">
      <a class="metric" href="{{ url('/stok-barang') }}">
        <span class="metric-head">Total produk <span class="metric-icon"><i class="fa-solid fa-boxes-stacked"></i></span></span>
        <strong class="metric-value">{{ number_format($productCount, 0, ',', '.') }}</strong>
        <span class="metric-note">{{ number_format($categoryCount, 0, ',', '.') }} varian produk</span>
      </a>
      <a class="metric" href="{{ url('/stok-barang') }}">
        <span class="metric-head">Total stok tersedia <span class="metric-icon"><i class="fa-solid fa-cubes"></i></span></span>
        <strong class="metric-value">{{ number_format($totalStock, 0, ',', '.') }}</strong>
        <span class="metric-note">Unit di seluruh produk</span>
      </a>
      <a class="metric alert" href="{{ url('/stok-barang') }}">
        <span class="metric-head">Stok rendah <span class="metric-icon"><i class="fa-solid fa-triangle-exclamation"></i></span></span>
        <strong class="metric-value">{{ number_format($lowStockCount, 0, ',', '.') }}</strong>
        <span class="metric-note">Produk dengan stok 5 unit atau kurang</span>
      </a>
      <a class="metric" href="{{ url('/keuangan') }}">
        <span class="metric-head">Pemasukan bulan ini <span class="metric-icon"><i class="fa-solid fa-arrow-trend-up"></i></span></span>
        <strong class="metric-value">Rp {{ number_format($monthlyIncome, 0, ',', '.') }}</strong>
        <span class="metric-note">Berdasarkan transaksi kategori pemasukan</span>
      </a>
      <a class="metric" href="{{ url('/keuangan') }}">
        <span class="metric-head">Pengeluaran bulan ini <span class="metric-icon"><i class="fa-solid fa-arrow-trend-down"></i></span></span>
        <strong class="metric-value">Rp {{ number_format($monthlyExpense, 0, ',', '.') }}</strong>
        <span class="metric-note">Berdasarkan transaksi kategori pengeluaran</span>
      </a>
      <a class="metric" href="{{ route('jadwal') }}">
        <span class="metric-head">Agenda mendatang <span class="metric-icon"><i class="fa-regular fa-calendar-check"></i></span></span>
        <strong class="metric-value">{{ number_format($upcomingEventCount, 0, ',', '.') }}</strong>
        <span class="metric-note">Agenda publik dan agenda Anda</span>
      </a>
    </section>

    <section class="panels">
      <div class="columns">
        <section class="panel">
          <div class="panel-head">
            <h2>Agenda mendatang</h2>
            <a class="panel-link" href="{{ route('jadwal') }}">Buka jadwal <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          @if ($upcomingEvents->isEmpty())
            <p class="empty">Belum ada agenda mendatang.</p>
          @else
            <ul class="event-list">
              @foreach ($upcomingEvents as $event)
                <li>
                  <div class="event-name">
                    <strong>{{ $event->title }}</strong>
                    <span>{{ \Illuminate\Support\Carbon::parse($event->date)->format('d/m/Y') }} · {{ $event->visibility === 'public' ? 'Publik' : 'Pribadi' }}</span>
                  </div>
                  <span class="event-time">{{ substr($event->start_time, 0, 5) }}</span>
                </li>
              @endforeach
            </ul>
          @endif
        </section>

        <section class="panel">
          <div class="panel-head">
            <h2>Perlu restok</h2>
            <a class="panel-link" href="{{ url('/stok-barang') }}">Kelola stok <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          @if ($lowStockProducts->isEmpty())
            <p class="empty">Semua stok produk di atas batas minimum.</p>
          @else
            <ul class="stock-list">
              @foreach ($lowStockProducts as $product)
                <li>
                  <div class="stock-name">
                    <strong>{{ $product->nama_barang }}</strong>
                    <span>{{ $product->id_barang }} · {{ $product->varian }}</span>
                  </div>
                  <span class="stock-count">{{ number_format($product->stok, 0, ',', '.') }} unit</span>
                </li>
              @endforeach
            </ul>
          @endif
        </section>
      </div>

      <section class="panel products-panel">
        <div class="panel-head">
          <h2>Daftar produk</h2>
          <a class="panel-link" href="{{ url('/stok-barang') }}">Lihat semua produk <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        @if ($products->isEmpty())
          <p class="empty">Belum ada produk. Buka halaman stok barang untuk mulai mengelola produk.</p>
        @else
          <div class="table-wrap">
            <table>
              <thead>
                <tr><th>ID PRODUK</th><th>NAMA</th><th>VARIAN</th><th>STOK</th><th>STATUS</th></tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id_barang }}</td>
                    <td>{{ $product->nama_barang }}</td>
                    <td>{{ $product->varian }}</td>
                    <td>{{ number_format($product->stok, 0, ',', '.') }}</td>
                    <td class="stock-status {{ $product->stok <= 5 ? 'low' : '' }}">{{ $product->stok <= 5 ? 'Perlu restok' : 'Tersedia' }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </section>
    </section>
  </main>
</div>
</body>
</html>
