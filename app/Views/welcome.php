<?= $this->extend('layouts/masterweb') ?>

<?= $this->section('content') ?>
<div class="bg-img-hero-bottom gradient-overlay-half-black-gradient space-1 text-center" style="background-image: url(https://placehold.co/1920x800);">
    <div class="container">
        <div class="px-3 pb-4 py-xl-11 mt-xl-4">
            <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold">Online Ticketing</h1>
            <p class="font-size-20 font-weight-normal text-white ml-3">Temukan Bus yang nyaman dan luar biasa</p>
        </div>
        <div class="pt-xl-4">
            <div class="mb-2">
                <ul class="nav tab-nav-rounded flex-nowrap pb-2 pb-md-4 tab-nav" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link font-weight-medium active pl-md-5 pl-3" id="pills-one-example2-tab"
                            data-toggle="pill" href="#pills-one-example2" role="tab"
                            aria-controls="pills-one-example2" aria-selected="true">
                            <div
                                class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                <figure class="ie-height-40 d-md-block mr-md-3">
                                    <i class="icon flaticon-sedan font-size-3"></i>
                                </figure>
                                <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Pemesanan</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-medium" id="pills-two-example2-tab" data-toggle="pill"
                            href="#pills-two-example2" role="tab" aria-controls="pills-two-example2"
                            aria-selected="true">
                            <div
                                class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                <figure class="ie-height-40 d-md-block mr-md-3">
                                    <i class="icon flaticon-tickets font-size-3"></i>
                                </figure>
                                <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Cek Status</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-medium" id="pills-three-example2-tab" data-toggle="pill"
                            href="#pills-three-example2" role="tab" aria-controls="pills-three-example2"
                            aria-selected="true">
                            <div
                                class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                <figure class=" ie-height-40  d-md-block mr-md-3">
                                    <i class="icon flaticon-global-1 font-size-3"></i>
                                </figure>
                                <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">Bus Tracking</span>
                            </div>
                        </a>
                    </li>

                </ul>

                <div class="tab-content hero-tab-pane">
                    <div class="tab-pane fade active show" id="pills-one-example2" role="tabpanel" aria-labelledby="pills-one-example2-tab">
                        <div class="card border-0 tab-shadow">
                            <div class="card-body">
                                <form class="js-validate">
                                    <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">

                                        <div class="col-sm-12 col-lg-3dot6 col-xl-3gdot5 mb-4 mb-lg-0">
                                            <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Kota Asal</span>
                                            <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold"
                                                title="Kota Asal" 
                                                data-style data-live-search="true"
                                                data-searchbox-classes="input-group-sm">
                                                <option class="border-bottom border-color-1" value="project1" data-content="">
                                                    Tabanan
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-xl-3 mb-4 mb-lg-0">
                                            <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Kota Tujuan</span>
                                            <select class="js-select selectpicker dropdown-select tab-dropdown col-12 pl-0 flaticon-pin-1 d-flex align-items-center text-primary font-weight-semi-bold"
                                                title="Kota Tujuan" 
                                                data-style data-live-search="true"
                                                data-searchbox-classes="input-group-sm">
                                                <option class="border-bottom border-color-1" value="project1" data-content="">
                                                    Denpasar
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-lg-3dot7 col-xl-3gdot5 mb-4 mb-lg-0 ">
                                            <span class="d-block text-gray-1 text-left font-weight-normal mb-0">Tanggal</span>
                                            <div class="border-bottom border-width-2 border-color-1">
                                                <div id="datepickerWrapperFromOne" class="u-datepicker input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="d-flex align-items-center mr-2">
                                                            <i class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                        </span>
                                                    </div>
                                                    <input class="js-range-datepicker font-size-16 shadow-none font-weight-medium form-control hero-form bg-transparent  border-0"
                                                        type="date" data-rp-wrapper="#datepickerWrapperFromOne"
                                                        data-rp-type="range" data-rp-date-format="M d / Y"
                                                        data-rp-default-date="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                            <button type="submit" class="btn btn-primary w-100 border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover">
                                                <i class="flaticon-magnifying-glass font-size-20 mr-2"></i>
                                                Cari
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-example2" role="tabpanel"
                        aria-labelledby="pills-two-example2-tab">
                        <div class="card border-0 tab-shadow">
                            <div class="card-body">
                                <form class="js-validate">
                                    <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">

                                        <div class="col-sm-5 mb-4 mb-lg-0">
                                            <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Kode Booking</span>
                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless u-search-slide-down__input rounded-0 px-1">
                                                <input type="search" class="form-control" placeholder="Kode Booking" aria-label="Kode Booking">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn py-0">
                                                        <span class="flaticon-magnifying-glass font-size-20"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 mb-4 mb-lg-0">
                                            <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Email</span>
                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless u-search-slide-down__input rounded-0 px-1">
                                                <input type="search" class="form-control" placeholder="Email" aria-label="Email">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn py-0">
                                                        <span class="flaticon-magnifying-glass font-size-20"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                            <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover">
                                                <i class="flaticon-magnifying-glass font-size-20 mr-2"></i>
                                                Cari
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-example2" role="tabpanel"
                        aria-labelledby="pills-three-example2-tab">
                        <div class="card border-0 tab-shadow">
                            <div class="card-body">
                                <form class="js-validate">
                                    <div class="row d-block nav-select d-lg-flex mb-lg-3 px-2 px-lg-3 align-items-end">
                                        
                                        <div class="col-sm-10 mb-4 mb-lg-0 ">
                                            <span class="d-block text-gray-1 font-weight-normal text-left mb-0">Kode Booking</span>
                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless u-search-slide-down__input rounded-0 px-1">
                                                <input type="search" class="form-control" placeholder="Kode Booking" aria-label="Kode Booking">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn py-0">
                                                        <span class="flaticon-magnifying-glass font-size-20"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-xl-2 align-self-lg-end text-md-right">
                                            <button type="submit" class="btn btn-primary btn-md border-radius-3 mb-xl-0 mb-lg-1 transition-3d-hover">
                                                <i class="flaticon-magnifying-glass font-size-20 mr-2"></i>
                                                Cari
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="destinantion-block destinantion-v1">
    <div class="container space-bottom-1 space-1">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mt-4">
            <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">PT. Gunung Harta</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/630x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus I</a>
                        </div>
                    </header>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/300x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus II</a>
                        </div>
                    </header>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/300x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus III</a>
                        </div>
                    </header>
                </div>
            </div>
            
            <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/300x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus IV</a>
                        </div>
                    </header>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 mb-3 mb-md-4 pb-1">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/300x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus V</a>
                        </div>
                    </header>
                </div>
            </div>

            <div class="col-md-6 mb-3 mb-md-0">
                <div class="min-height-350 bg-img-hero rounded-border p-5 gradient-overlay-half-bg-gradient-v4 gradient-overlay transition-3d-hover shadow-hover-2 dropdown" style="background-image: url(https://placehold.co/630x350/png);">
                    <header class="w-100 d-flex justify-content-between mb-3">
                        <div class="position-relative">
                            <a href="javascript:void();" class="destination text-white font-weight-bold font-size-21 pb-3 mb-3 text-lh-1 d-block">Bus VI</a>
                        </div>
                    </header>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="icon-block-center icon-center-v1 border-bottom">
    <div class="container text-center space-1">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1 mt-3">
            <h2 class="section-title text-black font-size-30 font-weight-bold">Cara Pemesanan</h2>
        </div>
        <div class="mb-2">
            <div class="row">
                <div class="col-md-3">
                    <i class="flaticon-global-1 text-primary font-size-80 mb-3"></i>
                    <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Cari Kota Tujuan</a></h5>
                    <p class="text-gray-1 px-xl-2 px-uw-7">Pilih kota tujuan dan tanggal Keberangkatan.</p>
                </div>

                <div class="col-md-3">
                    <i class="flaticon-sedan text-primary font-size-80 mb-3"></i>
                    <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Pilih Bus</a></h5>
                    <p class="text-gray-1 px-xl-2 px-uw-7">Pilih bus sesuai jam keberangkatan.</p>
                </div>

                <div class="col-md-3">
                    <i class="flaticon-desk-chair text-primary font-size-80 mb-3"></i>
                    <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Pilih Kursi</a></h5>
                    <p class="text-gray-1 px-xl-2 px-uw-7">Pilih posisi kursi yang akan dipesan.</p>
                </div>

                <div class="col-md-3">
                    <i class="flaticon-tickets text-primary font-size-80 mb-3"></i>
                    <h5 class="font-size-17 text-dark font-weight-bold mb-2"><a href="#">Konfirmasi Booking</a></h5>
                    <p class="text-gray-1 px-xl-2 px-uw-7">Data booking akan dikirimkan via email.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="banner-block banner-v2 bg-color-1">
    <div class="container space-2 space-lg-3 space-top-xl-2 space-bottom-xl-0">
        <div class="row align-items-lg-center align-items-xl-start mt-xl-4 pt-1">
            <div class="col mb-7 mb-lg-0 mt-xl-9">
                <h5 class="font-size-xs-30 font-size-40 font-weight-bold text-white mb-2">Download</h5>
                <p class="font-size-18 font-weight-normal text-white mb-4 mb-md-5 pb-lg-2">Download aplikasi Gunung Harta sekarang juga, untuk pemesanan tiket sesuai kebutuhan dengan mudah! </p>
                <button type="button" class="btn btn-wide rounded-xs transition-3d-hover btn-outline-white border-width-2 py-1 pl-lg-4 text-left">
                    <span class="media align-items-center ml-1">
                        <span class="flaticon-google-play font-size-35 mr-3"></span>
                        <span class="media-body">
                            <strong class="font-weight-bold">Google Play</strong>
                            <span class="d-block font-weight-normal font-size-14">Dapatkan Sekarang</span>
                        </span>
                    </span>
                </button>
            </div>
            <div class="col-lg-5 col-xl-6dot5 text-right mr-xl-n2">
                <img class="img-fluid" src="https://placehold.co/600x400" alt="Image-Description">
            </div>
        </div>
    </div>
</div> -->

<?= $this->endSection() ?>