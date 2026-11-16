<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\Barang;
use App\Models\KeuanganAccount;
use App\Models\KeuanganCategory;
use App\Models\KeuanganTransaction;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with complete realistic dummy data.
     */
    public function run(): void
    {
        // 1. Akun Admin Utama
        $admin = User::create([
            'username' => 'admin',
            'email' => 'admin@cohive.id',
            'password' => Hash::make('admin123'),
            'role' => 'Admin',
        ]);

        Profile::create([
            'user_id' => $admin->id,
            'name' => 'Maulana Galang (Admin)',
            'birth_date' => '2001-08-15',
            'gender' => 'Laki-laki',
            'phone' => '081234567890',
            'address' => 'Jl. Dharmawangsa No. 45, Surabaya',
            'photo' => null,
        ]);

        // 2. Akun Karyawan
        $karyawan1 = User::create([
            'username' => 'budi',
            'email' => 'budi.santoso@cohive.id',
            'password' => Hash::make('karyawan123'),
            'role' => 'Karyawan',
        ]);
        Profile::create([
            'user_id' => $karyawan1->id,
            'name' => 'Budi Santoso',
            'birth_date' => '1998-05-12',
            'gender' => 'Laki-laki',
            'phone' => '081345678901',
            'address' => 'Gubeng Kertajaya, Surabaya',
        ]);

        $karyawan2 = User::create([
            'username' => 'siti',
            'email' => 'siti.nurhaliza@cohive.id',
            'password' => Hash::make('karyawan123'),
            'role' => 'Karyawan',
        ]);
        Profile::create([
            'user_id' => $karyawan2->id,
            'name' => 'Siti Nurhaliza',
            'birth_date' => '2000-11-20',
            'gender' => 'Perempuan',
            'phone' => '081456789012',
            'address' => 'Rungkut Asri, Surabaya',
        ]);

        // 3. Data Inventaris Barang
        $barangs = [
            [
                'id_barang' => 'BRG-001',
                'nama_barang' => 'Kopi Arabika Gayo Single Origin',
                'varian' => 'Biji Kopi 1 Kg',
                'stok' => 45,
                'tanggal_masuk' => '2026-10-15',
                'harga_beli' => 85000,
                'harga_jual' => 125000,
                'tanggal_exp' => '2027-10-15',
            ],
            [
                'id_barang' => 'BRG-002',
                'nama_barang' => 'Kopi Robusta Dampit Malang',
                'varian' => 'Biji Kopi 1 Kg',
                'stok' => 60,
                'tanggal_masuk' => '2026-10-18',
                'harga_beli' => 55000,
                'harga_jual' => 85000,
                'tanggal_exp' => '2027-10-18',
            ],
            [
                'id_barang' => 'BRG-003',
                'nama_barang' => 'Susu UHT Fresh Barista Edition',
                'varian' => 'Karton 1 Liter',
                'stok' => 84,
                'tanggal_masuk' => '2026-10-25',
                'harga_beli' => 16500,
                'harga_jual' => 22000,
                'tanggal_exp' => '2027-04-25',
            ],
            [
                'id_barang' => 'BRG-004',
                'nama_barang' => 'Sirup Vanilla Artisan Premium',
                'varian' => 'Botol Kaca 750ml',
                'stok' => 24,
                'tanggal_masuk' => '2026-10-10',
                'harga_beli' => 95000,
                'harga_jual' => 140000,
                'tanggal_exp' => '2028-01-01',
            ],
            [
                'id_barang' => 'BRG-005',
                'nama_barang' => 'Paper Cup 12oz Eco Double Wall',
                'varian' => 'Pack 50 pcs',
                'stok' => 120,
                'tanggal_masuk' => '2026-10-20',
                'harga_beli' => 28000,
                'harga_jual' => 40000,
                'tanggal_exp' => null,
            ],
            [
                'id_barang' => 'BRG-006',
                'nama_barang' => 'Teh Artisan Earl Grey Lavender',
                'varian' => 'Kaleng Tin 100gr',
                'stok' => 30,
                'tanggal_masuk' => '2026-10-12',
                'harga_beli' => 45000,
                'harga_jual' => 68000,
                'tanggal_exp' => '2027-12-31',
            ],
        ];

        foreach ($barangs as $b) {
            Barang::create($b);
        }

        // 4. Data Rekening Keuangan
        $accKasir = KeuanganAccount::create([
            'user_id' => $admin->id,
            'name' => 'Kas Operasional Kasir',
            'balance' => 4850000,
        ]);

        $accBca = KeuanganAccount::create([
            'user_id' => $admin->id,
            'name' => 'Bank BCA Bisnis Operasional',
            'balance' => 42600000,
        ]);

        $accQris = KeuanganAccount::create([
            'user_id' => $admin->id,
            'name' => 'E-Wallet QRIS Merchant Settlement',
            'balance' => 11450000,
        ]);

        // 5. Data Kategori Keuangan
        $catPenjualan = KeuanganCategory::create([
            'user_id' => $admin->id,
            'name' => 'Penjualan F&B Co-Working',
            'type' => 'income',
        ]);

        $catSewa = KeuanganCategory::create([
            'user_id' => $admin->id,
            'name' => 'Sewa Ruang Meeting & Event Space',
            'type' => 'income',
        ]);

        $catBahan = KeuanganCategory::create([
            'user_id' => $admin->id,
            'name' => 'Pengadaan Bahan Baku & Stok',
            'type' => 'expense',
        ]);

        $catUtilitas = KeuanganCategory::create([
            'user_id' => $admin->id,
            'name' => 'Listrik, Internet & Utilitas',
            'type' => 'expense',
        ]);

        // 6. Transaksi Keuangan
        $transactions = [
            [
                'user_id' => $admin->id,
                'account_id' => $accKasir->id,
                'category_id' => $catPenjualan->id,
                'amount' => 1850000,
                'transaction_date' => '2026-10-28',
                'description' => 'Penjualan harian dine-in kopi & pastry',
            ],
            [
                'user_id' => $admin->id,
                'account_id' => $accQris->id,
                'category_id' => $catPenjualan->id,
                'amount' => 2450000,
                'transaction_date' => '2026-10-29',
                'description' => 'Pembayaran pesanan via QRIS static',
            ],
            [
                'user_id' => $admin->id,
                'account_id' => $accBca->id,
                'category_id' => $catSewa->id,
                'amount' => 3500000,
                'transaction_date' => '2026-10-30',
                'description' => 'Sewa Dedicated Meeting Room Komunitas Startup',
            ],
            [
                'user_id' => $admin->id,
                'account_id' => $accBca->id,
                'category_id' => $catBahan->id,
                'amount' => 1250000,
                'transaction_date' => '2026-10-31',
                'description' => 'Restock biji kopi Arabika Gayo 15 kg',
            ],
            [
                'user_id' => $admin->id,
                'account_id' => $accBca->id,
                'category_id' => $catUtilitas->id,
                'amount' => 1800000,
                'transaction_date' => '2026-11-01',
                'description' => 'Tagihan Internet Fiber Optic 200 Mbps',
            ],
        ];

        foreach ($transactions as $t) {
            KeuanganTransaction::create($t);
        }

        // 7. Event & Kalender Jadwal
        $events = [
            [
                'title' => 'Weekly Team Sync & Briefing Operasional',
                'date' => '2026-11-03',
                'start_time' => '09:00:00',
                'end_time' => '10:30:00',
                'visibility' => 'private',
                'user_id' => $admin->id,
            ],
            [
                'title' => 'Workshop Coffee Manual Brewing & Cupping',
                'date' => '2026-11-07',
                'start_time' => '14:00:00',
                'end_time' => '17:00:00',
                'visibility' => 'public',
                'user_id' => $admin->id,
            ],
            [
                'title' => 'Stock Opname Bulanan Gudang & Bahan Baku',
                'date' => '2026-11-15',
                'start_time' => '18:00:00',
                'end_time' => '21:00:00',
                'visibility' => 'private',
                'user_id' => $admin->id,
            ],
        ];

        foreach ($events as $ev) {
            Event::create($ev);
        }
    }
}
