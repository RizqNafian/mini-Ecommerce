<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('management/dashboard');
    }

    public function produk()
    {
        $produk = Produk::all();
        return view('management/produk', compact('produk'));
    }

    public function produk_store()
    {
        Produk::create([
            'nama_produk' => request('nama_produk'),
            'harga' => request('harga'),
        ]);

        return redirect('/produk');
    }

    public function produk_update($id)
    {
        $produk = Produk::find($id);
        $produk->update([
            'nama_produk' => request('nama_produk'),
            'harga' => request('harga'),
        ]);
        return redirect('/produk');
    }

    public function produk_delete($id)
    {
        Produk::find($id)->delete();
        return redirect('/produk');
    }
}
