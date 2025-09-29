<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\transaksi;
use App\Models\transaksi_item;

class TokoController extends Controller
{
    public function home()
    {
        $produk = Produk::all();
        return view('toko/home', compact('produk'));
    }
    public function keranjang()
    {
        $keranjang = Keranjang::where('id_user', auth()->user()->id)
            ->join('produk', 'keranjang.id_produk', '=', 'produk.id')
            ->get();
        return view('toko/keranjang', compact('keranjang'));
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
        $transaksi_item = transaksi_item::get();
        transaksi_item::create([
            'id_transaksi' => transaksi::where('id_user', auth()->user()->id)->max('id'),
            'id_produk' => Keranjang::where('id_user', auth()->user()->id)->sum('id_produk'),
        ]);
        transaksi::create([
            'id_user' => auth()->user()->id,
            'id_transaksi_item' => Keranjang::where('id_user', auth()->user()->id)->sum('id_produk'),
            'jumlah' => Keranjang::where('id_user', auth()->user()->id)->sum('jumlah'),
            'harga' => Keranjang::where('id_user', auth()->user()->id)->sum('harga'),
        ]);
        Keranjang::where('id_user', auth()->user()->id)->delete();
        return redirect('/');
    }
}
