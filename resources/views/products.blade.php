@extends('layouts.main')

@section('container')
    <h1>Produk</h1>
    <h6>Temukan mesin jahit, aksesoris dan suku cadang yang Anda butuhkan</h6>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
        @foreach ($products as $products)
        <div class="col-md-4">
            <div class="{{ $products["card"] }}">
                <a href="/products/{{ $products["slug"] }}">
                    <img src="{{ $products["image"] }}" class="card-img-top" alt="...">
                </a>
                <div class="{{ $products["card-body"] }}">
                    <h5 class="mt-3">{{ $products["card-title"] }}</h5>
                    <p class="small">{{ $products["card-text"] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="row row-cols-1 row-cols-md-2 g-4 my-3">
        <div class="col-md-4">
            <div class="card bg-danger bg-opacity-25 border border-5 border-danger shadow rounded-5">
                <a href="/products/{{ $products["slug"] }}">
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367316_gN1oLjDlTHp5XsqQ4rC2.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body text-center text-bg-danger bg-opacity-100 rounded-5 m-2 p-1">
                    <h5 class="mt-3">Household Sewing Machines</h5>
                    <p class="small">Mesin Jahit Rumah Tangga</p>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
