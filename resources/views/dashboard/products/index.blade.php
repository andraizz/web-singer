@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Produk</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
        <i class="fa-regular fa-circle-check me-2"></i><div>{{ session('success') }}</div>
    </div>
@endif

<div class="table-responsive">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create new</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga Lama</th>
                <th scope="col">Harga Baru</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->nama_produk }}</td>
                {{-- <td>{{ $product->harga_lama }}</td>
                <td>{{ $product->harga_baru }}</td> --}}
                <td>{{ Str::currency($product->harga_lama) }}</td>
                <td>{{ Str::currency($product->harga_baru) }}</td>
                <td>{{ $product->stok }}</td>
                <td>
                    <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-success"><i class="fa-solid fa-eye"></i></a>
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection