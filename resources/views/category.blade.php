@extends('layouts.main')

@section('container')
    <h1>Kategori Produk</h1>
        <div class="row mt-4 mb-4">
            <div class="col-6 col-sm-3 col-lg-3">
                <h2>Mini</h2>
                <div class="card border-dark">
                    <a href="/detail_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1640333679_1cPFtTpDHOVmgKwn0uZq.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">M1005</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <h2>15 Class</h2>
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592368167_o73CJb06IaN1wX5KdshG.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">15CD1A</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <h2>Flatbed</h2>
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1666686072_ZlGFYH98DcojMzxWCdJb.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">984</p>
                </div>
            </div>
        </div>
        {{-- <div class="row mt-4 mb-4">
            <h2>Heavy Duty</h2>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367411_hKz0J1uresOoCyD4pqjb.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Heavy Duty 4411</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367428_t3ZzbUWMPke2cxKr5849.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Heavy Duty 4423</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367440_GkHXrau0ZzmeVj4TWI2s.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Heavy Duty 4432</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367457_3PuexkXvMc27p95oRHiW.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Scholastic™ 5511</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367477_WfGkXnKCaDYUO958JZ2R.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Scholastic™ 5523</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1595563865_Cjoe91z2clnNgfqQIJdL.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">14HD854</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <h2>Portable</h2>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1640666000_Uk5MH7FPO4niuX2vNdy3.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">M1155</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <h2>Overclock</h2>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592368022_AVQtuBmeGwb0x6sPW8Hf.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">14SH754</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <h2>Electronic</h2>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367874_Bz9QEXUZp1VrsMqgnm6w.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Featherweight™ C240</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <h2>Embroidery</h2>
            <div class="col-6 col-sm-3 col-lg-3">
                <div class="card border-dark">
                    <a href="/list_product">
                        <img src="https://singerindonesia.com//_assets/cimage/webroot/img.php?src=images/temp/1592367967_dDSWqGQ8ceiZlTOLhV1s.png" class="card-img" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">Quantum Stylist™ EM200</p>
                </div>
            </div>
        </div> --}}
    
      
@endsection