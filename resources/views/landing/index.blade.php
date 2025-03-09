<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/icon/ICON.png') }}" type="image/x-icon">
        <title>Graha Samawa</title>

        <!-- BOOTSTRAP CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <!-- LINK CSS DAN JS -->
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- FONT AWESOME & GOOGLE FONTS CDN -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    </head>

    <body>
        <header id="header" class="header d-flex align-items-center fixed-top shadow p-3 mb-5 bg-body">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img src="{{ asset('images/icon/GS_Black.png') }} " alt="">
                </a>

                <a href="https://wa.me/62895366481314" target="_blank" class="btn-whatsapp"><i
                        class="fa-brands fa-whatsapp fa-xl"></i><span> Hubungi Kami</span></a>

            </div>
        </header>

        <main class="main">

            <section id="hero" class="hero">
                <video autoplay muted loop class="hero-video">
                    <source src="https://pixeldrain.com/api/file/3ZSazASt" type="video/mp4">
                </video>

                <div class="container">
                    <div class="row text-start">
                        <div class="col-12">
                            <h2>Selamat Datang di</h2>
                            <h2>Graha Samawa</h2>
                            <p>Lokasi area Bangil, Pasuruan</p>

                            @if ($brochure)
                                <a href="{{ route('admin.brochure.download', $brochure->id) }}"
                                    class="btn btn-hubungikami mt-4">
                                    <i class="fa-solid fa-download"></i> <span>Unduh Brosur</span>
                                </a>
                            @else
                                <!-- <p class="text-danger">Brosur belum tersedia.</p> -->
                                <a href="" class="btn btn-danger brosur-unavailable mt-4 disabled bg-danger">
                                    <i class="fa-solid fa-circle-exclamation"></i> <span>Brosur Belum Tersedia</span>
                                </a>
                            @endif

                        </div>
                    </div>
            </section>

            <section id="unit" class="unit section">
                <div class="container">
                    <h2 class="d-flex justify-content-center">Unit Properti</h2>

                    <div class="row row-cols-3 g-5 pt-3 d-flex justify-content-center">
                        {{-- @foreach ($units as $unit) --}}
                        @if (isset($units) && count($units) > 0)
                            @foreach ($units as $unit)
                                <div class="col-12 col-lg-6 col-xl-4">
                                    <div class="card shadow-lg mb-5 rounded">
                                        <div id="testCarousel" class="carousel slide">
                                            <div class="carousel-inner">
                                                <!-- PENGAMBILAN DATA IMAGE BUAT SLIDESHOW DISINI -->
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}"
                                                    alt="{{ $unit->nama_unit }}" style="max-height: 225px; object-fit: cover;"
                                                    class="card-img-top">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}"
                                                    alt="{{ $unit->nama_unit }}" style="max-height: 225px; object-fit: cover;"
                                                    class="card-img-top">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}"
                                                    alt="{{ $unit->nama_unit }}" style="max-height: 225px; object-fit: cover;"
                                                    class="card-img-top">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#testCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#testCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        {{-- <img src="{{ asset('images/BG.jpg') }}" class="card-img-top" alt=""> --}}
                                        
                                        <div class="card-body">
                                            <div class="title">
                                                <div class="row row-cols-2">
                                                    <div class="col-lg-6">
                                                        <h4 class="card-text">{{ $unit->nama_unit }}</h4>
                                                    </div>
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <p class="card-text">Harga mulai dari</p>
                                                    </div>
                                                    <div class="col-lg-12 col-12">
                                                        <h4 class="card-text d-flex justify-content-end value-properti">
                                                            Rp {{ number_format($unit->harga, 0, ',', '.') }}</h4>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fasilitas mt-4">
                                                <p><strong>Fasilitas</strong> :</p>
                                                <div class="row row-cols-3">
                                                    <div class="col-1 col-lg-1">
                                                        <i class="fas fa-bed"></i>
                                                    </div>
                                                    <div class="col-8 col-lg-8">
                                                        Kamar Tidur :
                                                    </div>
                                                    <div class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                                        {{ $unit->kamar_tidur }}
                                                    </div>
                                                    <div class="col-1 col-lg-1">
                                                        <i class="fas fa-bath"></i>
                                                    </div>
                                                    <div class="col-8 col-lg-8">
                                                        Kamar Mandi :
                                                    </div>
                                                    <div class="col-3 col-lg-3 value-km d-flex justify-content-lg-end">
                                                        {{ $unit->kamar_mandi }}
                                                    </div>
                                                    <div class="col-1 col-lg-1">
                                                        <i class="fas fa-building"></i>
                                                    </div>
                                                    <div class="col-8 col-lg-8">
                                                        Luas Bangunan :
                                                    </div>
                                                    <div class="col-3 col-lg-3 value-lb d-flex justify-content-lg-end">
                                                        {{ $unit->luas_bangunan }}<span>m&sup2;</span>
                                                    </div>
                                                    <div class="col-1 col-lg-1">
                                                        <i class="fas fa-maximize"></i>
                                                    </div>
                                                    <div class="col-8 col-lg-8">
                                                        Luas Tanah :
                                                    </div>
                                                    <div id="luas_tanah"
                                                        class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                                        {{ $unit->luas_tanah }}<span>m&sup2;</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary mt-4"
                                                data-bs-toggle="modal" data-bs-target="#detailUnitModal"
                                                data-unit="{{ $unit }}" style="width: 100%;">Detail</button>
                                            <a href="https://wa.me/62895366481314" target="_blank"
                                                class="btn btn-primary mt-2" style="width: 100%;">Hubungi</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Data belum tersedia.</p>
                        @endif
                        @include('modals.landing-detail-modal')
                    </div>
                </div>
            </section>

            <section id="tentang" class="tentang section">
                <div class="container">
                    <div class="d-flex justify-content-center judul-section">
                        <h2 class="">Tentang Kami</h2>
                    </div>
                    <p class="pt-2">Graha Samawa adalah perusahaan kontraktor dan pengembang properti. Graha Samawa
                        didirikan pada tahun 2025, seorang pengusaha muda yang memiliki banyak ide inovatif dalam
                        menciptakan kawasan hunian yang memadukan keindahan, keseimbangan lingkungan, dan kenyamanan
                        bagi penghuninya.</p>
                </div>
            </section>

            <section id="fasilitas-perum" class="fasilitas-perum section">
                <div class="container py-5">
                    <div class="d-flex justify-content-center mb-4 judul-section">
                        <h2 class="">Fasilitas</h2>
                    </div>
                    <div class="row d-flex justify-content-between text-center pt-2">
                        <div class="col-6 col-md-3">
                            <x-mdi-boom-gate-up-outline class="icon-fasilitas" />
                            <p>One Gate System</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <x-mdi-run class="icon-fasilitas" />
                            <p>Jogging Track</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <x-mdi-slide class="icon-fasilitas" />
                            <p>Taman Bermain</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <x-mdi-home-flood class="icon-fasilitas" />
                            <p>Bebas Banjir</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lokasi" class="lokasi section">
                <div class="container">
                    <div class="row align-items-stretch justify-content-between lokasi-item text-start">
                        <div class="col-lg-6 d-flex align-items-center gmap_canvas">
                            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5474862487054!2d112.7851232!3d-7.624114199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7db006e104971%3A0x952c0998010054d8!2sPerumahan%20Graha%20Samawa%20Bangil!5e0!3m2!1sen!2sid!4v1740561625465!5m2!1sen!2sid"
                                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- <style>
                                    .gmap_canvas{position:relative;text-align:right;width:600px;height:400px;}
                                    .gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}
                            </style> -->
                        <div class="col-lg-6 d-flex justify-content-center flex-column p-5">
                            <div class="d-flex justify-content-center judul-section">
                                <h2>Lokasi Kami</h2>
                            </div>
                            <p><strong>Alamat Graha Samawa</strong> : Watu Lanyu, Oro-Oro Ombowetan, Kec. Rembang, Pasuruan, Jawa Timur 67152</p>
                            <p>Hunian nyaman dengan akses mudah ke berbagai fasilitas penting, karena Terletak di jalur
                                utama.</p>
                            <ul>
                                <li>Dekat dengan pusat kota Bangil</li>
                                <li>Area perbelanjaan</li>
                                <li>Sekolah</li>
                                <li>Fasilitas kesehatan</li>
                                <li>Akses tol yang mempermudah mobilitas ke Surabaya dan sekitarnya</li>
                            </ul>
                            <p>Infrastruktur yang tertata rapi serta fasilitas umum yang
                                memadai menjadikan hunian ini pilihan tepat bagi Anda yang mencari rumah dengan nilai
                                investasi tinggi.</p>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="footer" class="footer section position-relative d-flex flex-column align-items-center"
                style="margin-top: 250px; font-size: 24px;">
                <div class="sosial-media p-4">
                    <div class="text-start">
                        <h5 style="font-size: 1.1em;">Sosial Media</h5>
                        <p style="font-size: .7em; font-weight: 400;">Ikuti kami untuk mendapatkan informasi seputar
                            Graha Samawa dan informasi lainnya.</p>
                    </div>
                    <div class="kontak d-flex flex-column px-3">
                        <a href="https://wa.me/62895366481314" class="d-flex align-items-center" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" x="0px" y="0px" width="35"
                                height="35" viewBox="0 0 48 48">
                                <path fill="#fff"
                                    d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                </path>
                                <path fill="#fff"
                                    d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                </path>
                                <path fill="#cfd8dc"
                                    d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                </path>
                                <path fill="#40c351"
                                    d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                </path>
                                <path fill="#fff" fill-rule="evenodd"
                                    d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>0895366481314</span>
                        </a>
                        <a href="https://instagram.com/grahasamawa" class="d-flex align-items-center"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 my-1" x="0px" y="0px" width="35"
                                height="35" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                    cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                    cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <path fill="#fff"
                                    d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                </path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff"
                                    d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                </path>
                            </svg>
                            <span>@grahasamawa</span>
                        </a>
                        <a href="https://www.facebook.com/share/1989vzbmwr/?mibextid=wwXIfr"
                            class="d-flex align-items-center" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" x="0px" y="0px" width="35"
                                height="35" viewBox="0 0 48 48">
                                <linearGradient id="awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1" x1="6.228"
                                    x2="42.077" y1="4.896" y2="43.432" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#0d61a9"></stop>
                                    <stop offset="1" stop-color="#16528c"></stop>
                                </linearGradient>
                                <path fill="url(#awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1)"
                                    d="M42,40c0,1.105-0.895,2-2,2H8c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h32	c1.105,0,2,0.895,2,2V40z">
                                </path>
                                <path
                                    d="M25,38V27h-4v-6h4v-2.138c0-5.042,2.666-7.818,7.505-7.818c1.995,0,3.077,0.14,3.598,0.208	l0.858,0.111L37,12.224L37,17h-3.635C32.237,17,32,18.378,32,19.535V21h4.723l-0.928,6H32v11H25z"
                                    opacity=".05"></path>
                                <path
                                    d="M25.5,37.5v-11h-4v-5h4v-2.638c0-4.788,2.422-7.318,7.005-7.318c1.971,0,3.03,0.138,3.54,0.204	l0.436,0.057l0.02,0.442V16.5h-3.135c-1.623,0-1.865,1.901-1.865,3.035V21.5h4.64l-0.773,5H31.5v11H25.5z"
                                    opacity=".07"></path>
                                <path fill="#fff"
                                    d="M33.365,16H36v-3.754c-0.492-0.064-1.531-0.203-3.495-0.203c-4.101,0-6.505,2.08-6.505,6.819V22h-4v4	h4v11h5V26h3.938l0.618-4H31v-2.465C31,17.661,31.612,16,33.365,16z">
                                </path>
                            </svg>
                            <span>Graha Samawa</span>
                        </a>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container copyright text-center mt-4 p-4">
                        <p style="font-size: .6em;">&copy; Copyright <strong>Testing Website</strong></p>
                    </div>
                </div>
            </footer>
        </main>

        <script>
            // Update modal fields when edit button is clicked
            $('#detailUnitModal').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget); // Button that triggered the modal
                var unit = button.data('unit');

                console.log("unit", unit);

                var formattedHarga = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(unit.harga);

                // // Update the modal's form action
                var modal = $(this);
                modal.find('#harga_properti').text(formattedHarga || 0);
                modal.find('#nama_unit').text(unit.nama_unit || "");
                modal.find('#kamar_tidur').text(unit.kamar_tidur || 0);
                modal.find('#kamar_mandi').text(unit.kamar_mandi || 0);
                modal.find('#carport').text(unit.carport);
                modal.find('#luas_tanah').text(`${unit.luas_tanah}m²`);
                modal.find('#luas_bangunan').text(`${unit.luas_bangunan}m²`);
                modal.find('#spesifikasi').text(unit.spesifikasi);
            });
        </script>

    </body>


</html>
