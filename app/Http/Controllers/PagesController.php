<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function __construct(){}

    public function index() {
        $data['title'] = "Clubstore.com";
        $produk = DB::table('produk')
            ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
            ->select('produk.*', 'kategori.nama as kategori')
            ->get();
        $kategori = DB::table('kategori')
            ->get();
        return view('home', ['produk' => $produk, 'data' => $data, 'kategori' => $kategori]);
    }
    public function keranjang() {
        $data['title'] = "Clubstore.com";
        $produk = DB::table('produk')
            ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
            ->select('produk.*', 'kategori.nama as kategori')
            ->get();
        $kategori = DB::table('kategori')
            ->get();
        return view('keranjang', ['produk' => $produk, 'data' => $data, 'kategori' => $kategori]);
    }

}
