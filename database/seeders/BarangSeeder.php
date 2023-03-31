<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::truncate();
        Barang::create([
            'kode_barang' => 'C1',
            'nama_barang' => 'Cat Tembok Putih',
            'jumlah_barang' => '20',
        ]);
        Barang::create([
            'kode_barang' => 'C2',
            'nama_barang' => 'Cat Tembok Hitam',
            'jumlah_barang' => '20',
        ]);
    }
}
