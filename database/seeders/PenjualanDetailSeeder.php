<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $barangs = DB::table('m_barang')->get();

        $data = [];
        $detail_id = 1;

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($i = 1; $i <= 3; $i++) {

                $barang = $barangs->random();

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan,
                    'barang_id' => $barang->barang_id,
                    'harga' => $barang->harga_jual,
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}
