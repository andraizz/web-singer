@extends('layouts.main')

@section('container')

<section id="detail-product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                <h1 class="fw-bold">{{ $items->nama_produk }}</h1>
                <img src="{{ asset('storage/' . $items->gambar) }}" alt="{{ $items->nama_produk }}" class="img-fluid mb-3">
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="author">
                        <div class="text-secondary" style="font-size: 14px">
                            <span>Published By</span>
                        </div>
                        <div class="author-name" style="font-size: 14px">
                            <span>singerjakarta</span>
                        </div>
                    </div>
                    <hr>
                    <div class="share">
                        <div class="text-secondary" style="font-size: 14px">
                            <span>Share</span>
                        </div>
                        <div class="share-with" style="font-size: 14px">
                            <div class="row">
                                <div class="col-2">
                                    <a href="#" class="twitter">
                                        <i class="fa-brands fa-square-twitter"></i>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="pinterest">
                                        <i class="fa-brands fa-square-pinterest"></i>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="linkedin">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="whatsapp">
                                        <i class="fa-brands fa-square-whatsapp"></i>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="line">
                                        <i class="fa-brands fa-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                    <p>{!! $items->deskripsi !!}</p>
                    <p>{{ $items->garansi }}</p>
                    <p>Khusus Konsumen wilayah JABODETABEK Setiap Pembelian Mesin Jahit di toko Huwa Tehnik (Agen Resmi Mesin Jahit Singer)
                        Konsumen akan ditraining/Pelatihan Penggunaan Mesin, fungsi-Fungsi Pola jahitannya Aksesoris dan perawatan Mesin tersebut.
                        Pembayaran Bisa ditempat setelah barang diterima (C.O.D), Cash, Debit (Bca dan Mandiri). Kartu kredit. Segera Hubungi Team Marketing Singer Jakarta (021) 87753821 – 081383521987 
                        Untuk informasi tentang Harga Mesin Jahit dan Bonus Menarik, Kami selalu Memberikan Pelayanan yang terbaik bagi Konsumen kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection