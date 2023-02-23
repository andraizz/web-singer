@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New</h1>
</div>

<div class="col-lg-8 mb-5">
    <h4 class="text-center mb-4">Singer Admin Database</h4>
    <form action="/dashboard/products" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" required autofocus value="{{ old('nama_produk') }}">
            @error('nama_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga_lama" class="form-label">Harga Lama</label>
            <input type="text" name="harga_lama" class="form-control @error('harga_lama') is-invalid @enderror" id="harga_lama" required value="{{ old('harga_lama') }}">
            @error('harga_lama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga_baru" class="form-label">Harga Baru</label>
            <input type="text" name="harga_baru" class="form-control @error('harga_baru') is-invalid @enderror" id="harga_baru" required value="{{ old('harga_baru') }}">
            @error('harga_baru')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" required value="{{ old('stok') }}">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="best_seller" class="form-label">Best Seller</label>
            <input type="text" name="best_seller" class="form-control @error('best_seller') is-invalid @enderror" id="best_seller" value="{{ old('best_seller') }}">
            @error('best_seller')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Produk</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('gambar') is-invalid @enderror" name="gambar" type="file" id="gambar" onchange="previewImage()">
            @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            @error('deskripsi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        
        <div class="d-grid">
            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Create</button>
        </div>
    </form>
</div>

<script>
    const nama_produk = document.querySelector('#nama_produk');
    const slug = document.querySelector('#slug');

    nama_produk.addEventListener('change', function(){
        fetch('/dashboard/products/checkSlug?nama_produk=' + nama_produk.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
