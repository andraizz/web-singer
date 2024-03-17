@extends('layouts.main')

@section('container')

<section id="about">
    <div class="container">
        <div class="header text-center">
            <h3>Tentang Singer</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <p class="text-center fs-5 mb-0"><b>Singer Jakarta</b> adalah toko online yang menjual produk mesin jahit bermerk Singer dengan kualitas terbaik dan bergaransi resmi. Mesin jahit SINGER bertahan hingga hari ini karena komitmen terhadap kualitas,
                    inovasi, dan layanan untuk Anda
                </p>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="product" class="products">
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
                            {{-- <button class="nav-link my-2 p-2"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <h6 class="m-0">Stand</h6>
                            </button> --}}
                        </div>
                        {{-- 1. Button 1 --}}
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <!-- Single Product -->
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                        <div id="product-1" class="card border-0 single-product">
                                            <div class="part-1">
                                                <span class="new">{{ $product->best_seller }}</span>
                                                <span class="discount">{{ $product->diskon }}</span>
                                                <a href="/{{ $product->slug }}">
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
</section>
<hr>
<section id="services">
    <div class="container">
        <div class="header text-center">
            <h3>Pelayanan</h3>
            <p>Beberapa pelayanan dari singer jakarta untuk para konsumen</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Gratis Ongkos Kirim</h6>
                            <p class="card-text mb-0"><b>Gratis</b> ongkos kirim wilayah Jakarta dan sekitarnya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Pelatihan Penggunaan Mesin</h6>
                            <p class="card-text mb-0">Pelatihan penggunan dan perawatan mesin akan kami bantu di workshop kami secara <b>GRATIS</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Sistem Pembayaran</h6>
                            <p class="card-text mb-0"><b>COD</b> setelah barang diterima khusus wilayah Jakarta dan Depok, <b>Kartu Kredit</b> (Free Charge), <b>Debit/Tunai</b> dan <b>Transfer bank</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Staff Marketing</h6>
                            <p class="card-text mb-0">Telpon 02187753821 atau Whatsapp 081383521987</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Layanan Service</h6>
                            <p class="card-text mb-0">Layanan Service datang ke rumah untuk wilayah Jakarta dan sekitarnya (area tertentu)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="card p-3 mb-3 shadow">
                    <div class="row align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                            <h6 class="card-title fw-bold">Bonus Pembelian</h6>
                            <p class="card-text mb-0">Kami berikan bonus pada type-type tertentu setiap pembelian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="olshop">
    <div class="container">
        <div class="header text-center">
            <h3>Temukan Kami</h3>
            <p>Temukan singer jakarta di sosial media dan online shop kami</p>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://www.facebook.com/singerjakarta/" target="blank" title="Temukan kami di Facebook"><img width="40" height="40" src="{{ asset('img/facebook.png') }}"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://instagram.com/huwa_mesin" target="blank" title="Temukan kami di Instagram"><img width="40" height="40" src="{{ asset('img/instagram.png') }}"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://shopee.co.id/tokowiramesin" target="blank" title="Temukan kami di Shopee"><img width="40" height="40" src="{{ asset('img/shopee.png') }}"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://tokopedia.com/huwasewing" target="blank" title="Temukan kami di Tokopedia"><img width="40" height="40" src="{{ asset('img/tokopedia.png') }}"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://www.bukalapak.com/u/singer_dijakarta" target="blank" title="Temukan kami di Bukalapak"><img width="40" height="40" src="{{ asset('img/bukalapak.png') }}"></a>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 mb-3">
                <a href="https://www.blibli.com/merchant/singer-jakarta/SIJ-60034?page=1&start=0&pickupPointCode=&cnc=&multiCategory=true&sort=7" target="blank" title="Temukan kami di Blibli"><img width="40" height="40" src="{{ asset('img/blibli.png') }}"></a>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8">
                <p class="small text-danger">Buka Senin s/d Minggu & Hari BesarTerkecuali Idul Fitri Pukul jam 09.00 s/d jam 19.00</p>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="bank">
	<div class="container">
        <div class="header text-center">
            <h3>Rekening Bank</h3>
            <p>Berikut ini adalah detail akun rekening bank kami, mohon untuk berhati-hati terhadap penipuan yang mengatas namakan toko online kami.</p>
        </div>
		<div class="row justify-content-center text-center">
			<div class="col-5">
				<img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" class="img-fluid mb-2" alt="bca" width="200">
				<p>Rek. 6870601229</p>
				<p>An. SUHATTA PUTRA</p>
			</div>
			<div class="col-5">
				<img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg" class="img-fluid mb-2" alt="mandiri" width="200">
				<p>Rek. 1560003456128</p>
				<p>An. SUHATTA PUTRA</p>
			</div>											
		</div>
	</div>
</section>

{{-- 
<section id="products" class="container">
    <div class="sub-header">
        <h2 class="text-center"><b>Produk Kami</b></h2>
        <p class="text-center">Temukan kualitas pada setiap barang yang kami buat</p>
    </div>
    <div class="row">
        <div class="col-12 list-produk g-2 text-center">
            <div class="products-item">
                <a href="/household-sewing-machines">
                    <h4 class="rounded-5">Household Sewing Machines</h4>
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367316_gN1oLjDlTHp5XsqQ4rC2.png" class="rounded-5 mx-auto mb-3" alt="household">
                </a>
            </div>
            <div class="products-item">
                <a href="/industrial-sewing-machines">
                    <h4 class="rounded-5">Industrial Sewing Machines</h4>
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592368091_3WZxAjFD4ukELl0BP5Vt.png" class="rounded-5 mx-auto mb-3" alt="industrial">
                </a>
            </div>
            <div class="products-item">
                <a href="/furnitures">
                    <h4 class="rounded-5">Furnitures</h4>
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1595567536_sgdvDZHn9o4wSJaNEx2X.png" class="rounded-5 mx-auto mb-3" alt="furnitures">
                </a>
            </div>
            <div class="products-item">
                <a href="/accessories">
                    <h4 class="rounded-5">Accessories</h4>
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1643777637_jHkV1rUqlMDvQsPRo2hT.png" class="rounded-5 mx-auto mb-3" alt="accessories">
                </a>
            </div>
            <div class="products-item">
                <a href="/spare-parts">
                    <h4 class="rounded-5">Spare Parts</h4>
                    <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1596593997_njzlKghQ1XGrsav6DL0O.png" class="rounded-5 mx-auto mb-3" alt="spare parts">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="products2" class="container">
    <div class="sub-header">
        <h2 class="text-center"><b>Promo Terbaik Kami</b></h2>
        <p class="text-center">Yuk, belanja mesin jahit SINGER di Official Store kami</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <a href='https://www.tokopedia.com/singerindonesia/mesin-jahit-singer-m1155'>
                <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1668052800_2sIVmlbA6CBk7R8hq4Q3.jpg" class="img-fluid rounded d-none d-md-block shop-now-imgs my-2" alt="tokopedia promo">
                <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1668052803_05mOrXMJWA4hy1Vc9ZPb.jpg" class="img-fluid rounded d-md-none shop-now-imgs my-2" alt="tokopedia promo">
            </a>
        </div>
        <div class="col-md-6 col-lg-5 ml-0 ml-lg-3 ml-lg-5">
            <a href='https://shopee.co.id/Mesin-Jahit-SINGER-M1155-i.72322738.7475387155?sp_atk=6f68c238-cb69-498c-aaf4-5'>
                <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1668052812_N76vHdh2Sa8fQkX3mEyb.jpg" class="img-fluid rounded d-none d-md-block shop-now-imgs my-2" alt="shopee promo">
                <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1668052814_bDTMdlNonuQrK9ksFm64.jpg" class="img-fluid rounded d-md-none shop-now-imgs my-2" alt="shopee promo">
            </a>
        </div>
    </div>
</section>

<section id="community" class="container">
    <hr/>
    <div class="row">
        <div class="col-3 col-sm-3 col-md-3 d-block text-center">
            <img src="https://singerindonesia.com/assets/img/sc.png" alt="logo sewingClub" class="img-thumbnail border-0">
        </div>
        <div class="col-9 col-sm-9 col-md-9">
            <h2 class="text-center"><b>Sewing Club</b></h2>
            <p class="text">Baru belajar menjahit atau ingin mengembangkan kemampuan menjahitmu? Yuk ikut Komunitas Kami!</p>
            <a href="/club"><button class="btn w-100 text-center px-5 rounded-5"><b>Mari Bergabung</b></button></a>
        </div>
    </div>
    <hr/>
</section>

<section id="keterangan" class="container">
    <div class="row d-flex justify-content-center">
        <div class="box col-12 col-sm-3 col-md-4">
            <a href="/service">
                <div class="icon img-fluid">
                    <img src="img/servicesinger.png" class="card-img-top icon" alt="service">
                </div>
                <div class="text-body">
                    <h4 class="title">Singer Service Plus</h4>
                    <p class="description hide">
                        SINGER® sigap melayani pelanggan setia kami, baik dalam servis dan pelatihan
                    </p>
                </div>
            </a>
        </div>
        <div class="box col-4 col-sm-3 col-md-4">
            <a href="/dealer">
                <div class="icon img-fluid">
                    <img src="https://singerindonesia.com/assets/img/maps.png" class="card-img-top" alt="dealer resmi">
                </div>
                <div class="text-body">
                    <h4 class="title">Dealer Resmi Singer</h4>
                    <p class="description hide">
                        Dealer SINGER® yang tersedia hampir di seluruh Indonesia.
                    </p>
                </div>
            </a>
        </div>
        <div class="box col-4 col-sm-3 col-md-4">
            <a href="/products">
                <div class="icon img-fluid">
                    <img src="img/ic_baseline-grocery-store.png" class="card-img-top" alt="marketplace">
                </div>
                <div class="text-body">
                    <h4 class="title">Store Singer</h4>
                    <p class="description hide">
                        Produk SINGER® tersedia baik offline maupun online store
                    </p>
                </div>
            </a>
        </div>
    </div>
</section> --}}

@endsection