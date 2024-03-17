@extends('layouts.main')

@section('container')


{{-- <section id="product" class="products">
    <div class="container">
        <section class="section-products">
            <div class="container">
                <div class="header text-center">
                    <h3>Produk Terbaru</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/products">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                <button class="btn" style="background-color: #ed174f; color:white" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="products">
                    <div class="row">
                        <div class="nav nav-pills d-flex justify-content-center mb-2">
                            <button class="nav-link me-4 my-2 p-2 active"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                <h6 class="m-0">Semua</h6>
                            </button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                        <div id="product-1" class="card border-0 single-product">
                                            <div class="part-1">
                                                <span class="new">{{ $product->best_seller }}</span>
                                                <span class="discount">{{ $product->diskon }}</span>
                                                <a href="/products/{{ $product->slug }}">
                                                    <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" title="{{ $product->nama_produk }}" alt="{{ $product->nama_produk }}">
                                                </a>
                                                <ul>
                                                    <li><a href="https://api.whatsapp.com/send?phone=6281383521987&text=Halo,%20Saya%20tertarik%20dengan%20produk%20:%20{{ $product->nama_produk }}"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body part-2">
                                                <h3 class="product-title">{{ $product->nama_produk }}</h3>
                                                <h4 class="product-old-price">{{ Str::currency($product->harga_lama) }}</h4>
                                                <h4 class="product-price text-danger">{{ Str::currency($product->harga_baru) }}</h4>
                                                <h5 class="stock"><i class="fa-solid fa-check"></i> {{ $product->stok }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section> --}}

@endsection
