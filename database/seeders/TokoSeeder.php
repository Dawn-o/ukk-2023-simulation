<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tokos')->insert([
            [
                'nama_toko' => 'Toko Budi',
                'alamat' => 'Jl. Raya No. 1',
                'nomor_telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_toko' => 'Toko Andi',
                'alamat' => 'Jl. Merdeka No. 15',
                'nomor_telepon' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_toko' => 'Toko Citra',
                'alamat' => 'Jl. Sudirman No. 25',
                'nomor_telepon' => '083456789012',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
