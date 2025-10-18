<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama' => 'Pensil',
                'kategori' => 'Alat Tulis',
                'qty' => 20,
                'harga_beli' => 1000,
                'harga_jual' => 2000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Buku',
                'kategori' => 'Alat Tulis',
                'qty' => 10,
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

