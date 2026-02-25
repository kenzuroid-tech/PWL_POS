<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'Pulpen',
                'kategori_id' => 1,
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'barang_kode' => 'B002',
                'barang_nama' => 'Pensil',
                'kategori_id' => 1,
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 3,
                'barang_kode' => 'B003',
                'barang_nama' => 'Buku Tulis',
                'kategori_id' => 2,
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 4,
                'barang_kode' => 'B004',
                'barang_nama' => 'Buku Note',
                'kategori_id' => 2,
                'harga_beli' => 5000,
                'harga_jual' => 6500,
            ],
            [
                'barang_id' => 5,
                'barang_kode' => 'B005',
                'barang_nama' => 'Kertas Folio Bergaris 1 Pack',
                'kategori_id' => 3,
                'harga_beli' => 40000,
                'harga_jual' => 45000,
            ],
            [
                'barang_id' => 6,
                'barang_kode' => 'B006',
                'barang_nama' => 'Kertas HVS A4 1 rim',
                'kategori_id' => 3,
                'harga_beli' => 42000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 7,
                'barang_kode' => 'B007',
                'barang_nama' => 'Map Plastik',
                'kategori_id' => 4,
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 8,
                'barang_kode' => 'B008',
                'barang_nama' => 'Staples',
                'kategori_id' => 4,
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 9,
                'barang_kode' => 'B009',
                'barang_nama' => 'Penggaris 30cm',
                'kategori_id' => 5,
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 10,
                'barang_kode' => 'B0010',
                'barang_nama' => 'Kalkulator Saku',
                'kategori_id' => 5,
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
