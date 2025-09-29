<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;

class TokoController extends Controller
{
    public function home()
    {
        $produk = Produk::all();
        return view('toko/home', compact('produk'));
    }
    public function keranjang()
    {
        $produk = Produk::find(request('id'));
        return view('toko/keranjang', compact('produk'));
    }
    public function keranjang_tambah($id)
    {
        $produk = Produk::find($id);
        Keranjang::create([
            'id_user' => auth()->user()->id,
            'id_produk' => $produk->id,
        ]);
        return redirect('/keranjang');
    }
    public function checkout()
    {
        return view('toko/checkout');
    }
}
