@extends('dashboard.layouts.main')

@section('container')
<div class="row">
        <div class="col-12 mt-4 mb-4 col-md-4">
            <img src="{{ asset('storage/' . $items->gambar) }}" alt="{{ $items->nama_produk }}" class="img-fluid mb-3">
            <a href="/dashboard/products" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back</a>
            <a href="/dashboard/products/{{ $items->slug }}/edit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <form action="/dashboard/products/{{ $items->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </div>

        <div class="col-12 mt-4 mb-4 col-md-8">
            <h1>{{ $items->nama_produk }}</h1>
            <p style="text-align: justify">{!! $items->deskripsi !!}</p>
            <p>
                <b>{{ $items->beli }}</b>
                <a href="{{ $items->tokopedia }}"> {!! $items->logo_tokped !!}</a>
                <a href="{{ $items->shopee }}"> {!! $items->logo_shopee !!}</a>
            </p>
            <p style="text-align: justify">Khusus Konsumen wilayah JABODETABEK Setiap Pembelian Mesin Jahit di toko Huwa Tehnik (Agen Resmi Mesin Jahit Singer)
                Konsumen akan ditreining/Pelatihan Penggunaan Mesin, fungsi-Fungsi Pola jahitannya Aksesoris dan perawatan Mesin tersebut.
                Pembayaran Bisa ditempat setelah barang diterima (C.O.D), Cash, Debit (Bca dan Mandiri). Kartu kredit. Segera Hubungi Team Marketing Singer Jakarta (021) 87753821 – 081383521987 
                Untuk informasi tentang Harga Mesin Jahit dan Bonus Menarik, Kami selalu Memberikan Pelayanan yang terbaik bagi Konsumen kami.
            </p>
        </div>
    </div>
@endsection