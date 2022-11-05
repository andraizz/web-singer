@extends('layouts.main')

<link rel="stylesheet" href="css/style.css">
<style>
    .small-img-group{
        display: flex;
        justify-content: space-between;
    }
    .small-img-col{
        flex-basis: 24%;
        cursor: pointer;
    }
</style>

@section('container')
<section class="container dproduct">
    <div class="row">
        <div class="col-12 mt-4 mb-4 col-md-4">
            <img class="img-fluid w-100" src="img/heavy4411.png" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/heavy4411.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/heavy4411.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/heavy4411.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/heavy4411.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/heavy4411.png" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="col-12 mt-4 mb-4 col-md-8">
            <h1>Heavy Duty 4411</h1>
            <p style="text-align: justify">Mesin jahit seri Heavy Duty cocok untuk Anda yang menginginkan mesin jahit yang kuat dan dapat menjahit segala jenis kain, 
                terutama kain yang tebal dan keras seperti bahan kulit dan jeans. Mesin jahit ini dilengkapi dengan 11 pola jahitan, lampu LED, 
                pemotong benang, dan tuas pengangkat sepatu yang dapat mengangkat sepatu lebih tinggi dibandingkan mesin jahit lainnya. 
                Dilengkapi dengan <strong>Heavy Duty Motor</strong> yang membuat kecepatan menjahit mesin ini mencapai 1.100 jahitan/menit. 
                Heavy Duty 4411 sangatlah kuat dan multifungsi!
            </p>
            <p>Spesifikasi:</p>
            <ul>
                <li>11 Pola jahitan</li>
                <li>1.100 jahitan/menit</li>
                <li>4 langkah pelubang kancing</li>
                <li>Top drop-in bobbin</li>
                <li>Pemotong benang</li>
                <li>Pemutar bobbin otomatis</li>
                <li>Pengatur pola jahitan</li>
                <li>Pengatur panjang jahitan</li>
                <li>Pengatur lebar jahitan</li>
                <li>Pengatur posisi jarum</li>
                <li>Pengatur tekanan benang atas</li>
                <li>Tuas jahitan mundur</li>
                <li>Lampu LED</li>
                <li><strong>Heavy duty motor</strong></li>
            </ul>
        </div>
    </div>
</section>
@endsection