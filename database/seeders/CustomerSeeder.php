<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'nama_pelanggan' => 'Budi Santoso',
                'nomor_telepon' => '081234567890',
                'email' => 'budi@example.com',
                'alamat' => 'Jl. Merdeka No. 10',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'kode_pos' => '12345',
                'tanggal_registrasi' => now(),
                'status' => 'aktif',
            ],
            [
                'nama_pelanggan' => 'Siti Rahayu',
                'nomor_telepon' => '082345678901',
                'email' => 'siti@example.com',
                'alamat' => 'Jl. Pahlawan No. 25',
                'kota' => 'Bandung',
                'provinsi' => 'Jawa Barat',
                'kode_pos' => '40115',
                'tanggal_registrasi' => now(),
                'status' => 'aktif',
            ],
            [
                'nama_pelanggan' => 'Ahmad Hidayat',
                'nomor_telepon' => '083456789012',
                'email' => 'ahmad@example.com',
                'alamat' => 'Jl. Diponegoro No. 5',
                'kota' => 'Surabaya',
                'provinsi' => 'Jawa Timur',
                'kode_pos' => '60115',
                'tanggal_registrasi' => now(),
                'status' => 'aktif',
            ],
            [
                'nama_pelanggan' => 'Maya Wijaya',
                'nomor_telepon' => '084567890123',
                'email' => 'maya@example.com',
                'alamat' => 'Jl. Sudirman No. 100',
                'kota' => 'Yogyakarta',
                'provinsi' => 'DIY',
                'kode_pos' => '55281',
                'tanggal_registrasi' => now(),
                'status' => 'tidak aktif',
            ],
            [
                'nama_pelanggan' => 'Deni Setiawan',
                'nomor_telepon' => '085678901234',
                'email' => 'deni@example.com',
                'alamat' => 'Jl. Gajah Mada No. 15',
                'kota' => 'Semarang',
                'provinsi' => 'Jawa Tengah',
                'kode_pos' => '50138',
                'tanggal_registrasi' => now(),
                'status' => 'aktif',
            ],
        ];
        
        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
