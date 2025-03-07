<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama_produk' => 'Beras Premium',
                'harga' => '15000',
                'stok' => '100',
                'id_toko' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Minyak Goreng',
                'harga' => '20000',
                'stok' => '50',
                'id_toko' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Gula Pasir',
                'harga' => '12000',
                'stok' => '75',
                'id_toko' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Telur',
                'harga' => '25000',
                'stok' => '30',
                'id_toko' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Tepung Terigu',
                'harga' => '10000',
                'stok' => '80',
                'id_toko' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kopi Sachet',
                'harga' => '1500',
                'stok' => '200',
                'id_toko' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
