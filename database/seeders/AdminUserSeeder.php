<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'nomor_telepon' => '081234567890',
                'role' => 'super_admin',
                'status' => 'aktif',
                'terakhir_login' => now(),
            ],
            [
                'nama' => 'Rudi Hartono',
                'username' => 'rudi',
                'email' => 'rudi@example.com',
                'password' => Hash::make('password'),
                'nomor_telepon' => '082345678901',
                'role' => 'admin',
                'status' => 'aktif',
                'terakhir_login' => now(),
            ],
            [
                'nama' => 'Nina Wati',
                'username' => 'nina',
                'email' => 'nina@example.com',
                'password' => Hash::make('password'),
                'nomor_telepon' => '083456789012',
                'role' => 'staff',
                'status' => 'aktif',
                'terakhir_login' => now(),
            ],
        ];
        
        foreach ($admins as $admin) {
            AdminUser::create($admin);
        }
    }
}
