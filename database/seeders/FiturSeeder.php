<?php

namespace Database\Seeders;

use App\Models\Fitur;
use Illuminate\Database\Seeder;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fiturs = [
            [
                'nama' => 'Booking Online',
                'deskripsi' => 'Pesan lapangan kapan saja dan di mana saja melalui aplikasi.',
            ],
            [
                'nama' => 'Pembayaran Digital',
                'deskripsi' => 'Mendukung berbagai metode pembayaran seperti QRIS, Transfer Bank, dan E-Wallet.',
            ],
            [
                'nama' => 'Jadwal Real-time',
                'deskripsi' => 'Lihat ketersediaan slot waktu lapangan secara langsung tanpa perlu bertanya.',
            ],
            [
                'nama' => 'Notifikasi Pengingat',
                'deskripsi' => 'Dapatkan pengingat otomatis sebelum jadwal pertandingan dimulai.',
            ],
            [
                'nama' => 'Riwayat Reservasi',
                'deskripsi' => 'Pantau semua riwayat pemesanan Anda dengan mudah dalam satu halaman.',
            ],
        ];

        foreach ($fiturs as $fitur) {
            Fitur::create($fitur);
        }
    }
}
