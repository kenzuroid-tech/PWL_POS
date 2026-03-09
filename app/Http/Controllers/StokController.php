<?php

namespace App\Http\Controllers;

use App\Models\StokModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StokController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Data Stok Barang',
            'list' => ['Home', 'Stok Barang']
        ];

        $page = (object) [
            'title' => 'Daftar stok barang dalam sistem'
        ];

        $activeMenu = 'stok'; // sesuaikan dengan nama menu di sidebar

        return view('stok.index', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ]);
    }

    public function list(Request $request)
    {
        $stok = StokModel::with(['barang'])->select('t_stok.*');

        return DataTables::of($stok)
            ->addIndexColumn()
            ->addColumn('barang_nama', function ($row) {
                return $row->barang ? $row->barang->barang_nama : '-';
            })
            ->toJson();
    }
}
