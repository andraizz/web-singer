@extends('layouts.main')

@section('container')
<h1>List Produk</h1>
    <h6>Temukan mesin jahit blabalbalbal</h6>
    <div class="container p-4">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="img/image1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Industrial Sewing Machines</h4>
                        <p class="card-text">Mesin jahit industri</p>
                        <a href="/list_product" class="btn btn-primary">See</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="img/image2.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Industrial Sewing Machines</h4>
                        <p class="card-text">Mesin jahit industri</p>
                        <a href="#" class="btn btn-primary">See</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection