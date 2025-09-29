@extends('template.toko')

@section('title', 'Beranda - TokoKu')

@section('content')
    <div class="text-center mb-5">
        <h1>Selamat Datang di <span class="text-primary">TokoKu</span></h1>
        <p class="lead">Temukan produk terbaik dengan harga terjangkau</p>
    </div>

    <div class="row">
        @foreach($produk as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $item->gambar }}" class="card-img-top" alt="{{ $item->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_produk }}</h5>
                        <p class="card-text text-primary">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        <a href="{{ url('/keranjang/tambah/'.$item->id) }}" class="btn btn-sm btn-primary">Masukan Keranjang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
