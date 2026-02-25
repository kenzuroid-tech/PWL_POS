<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class KategoriController extends Controller
{
    public function index()
    {
        // $data =  [
        //     'kategori_kode' => 'K006',
        //     'kategori_nama' => 'Alat Lukis',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'K006')->update(['kategori_nama' => 'Penglengkapan Lukis']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '.$row.' baris';

        // $row = DB::delete('delete from m_kategori where kategori_kode = ?', ['K006']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row.' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
