<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Barang;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$$2y$10$oix4RQtzAvReu6VQBR.RHOFxPcHFQZ6e/yKqQuIii.A.m9fkTbyA.',
            'remember_token' => Str::random(10),
            'role'=> "admin"
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$cjF6uX/ecymGhdxPX5/n2.VUVSctPIZOz4cCfjynOT6...',
            'remember_token' => Str::random(10),
            'role'=> "superadmin"

        ]);
        $barangs = [
            [
                'uuid' => 'ABC123',
                'category_id' => 1,
                'supplier_id' => 1,
                'kode_barang' => 'B001',
                'harga_jual' => 100.00,
                'harga_pokok' => 75.00,
                'stok' => 50,
                'judul' => 'Barang pertama',
                'status' => 'Tersedia',
            ],
            [
                'uuid' => 'DEF456',
                'category_id' => 2,
                'supplier_id' => 2,
                'kode_barang' => 'B002',
                'harga_jual' => 120.00,
                'harga_pokok' => 90.00,
                'stok' => 75,
                'judul' => 'Barang kedua',
                'status' => 'Tersedia',
            ],
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        foreach ($barangs as $barang) {
            Barang::create($barang);
        }
    }
}
