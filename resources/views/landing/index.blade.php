<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset ('images/icon/ICON.png') }}" type="image/x-icon">
    <title>Graha Samawa</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- LINK CSS DAN JS -->
    <link rel="stylesheet" href="{{asset('css/landing.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- FONT AWESOME & GOOGLE FONTS CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js">

</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top shadow p-3 mb-5 bg-body">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset ('images/icon/LOGO_GRAHA_SAMAWA_HITAM.png') }} " alt="">
                {{-- <h1 class="namasite">Graha Samawa</h1> --}}
            </a>
    
            <a href="https://wa.me/62895366481314" target="_blank" class="btn-whatsapp"><i class="fa-brands fa-whatsapp fa-xl"></i><span> Hubungi Kami</span></a>
    
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
                    <a href="#" target="_blank" class="btn btn-hubungikami mt-4">
                        <i class="fa-solid fa-download"></i><span> Download Brosur</span>
                    </a>
                </div>
            </div>
        </section>


        <section id="unit" class="unit section pt-5">
            <div class="container">
                <h2 class="d-flex justify-content-center">Unit Properti</h2>
               
                <div class="row row-cols-3 g-5 pt-3 d-flex align-items-center">
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="card shadow-lg mb-5 rounded">
                            <img src="{{ asset ('images/BG.jpg') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <div class="title">
                                    <div class="row row-cols-2">
                                        <div class="col-lg-4">
                                            <h4 class="card-text">Tipe A</h4>
                                        </div>
                                        <div class="col-lg-8 d-flex justify-content-end">
                                            <p class="card-text">Harga mulai dari</p>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <h4 class="card-text d-flex justify-content-end value-properti">Rp 96.000.000</h4>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="fasilitas mt-4">
                                    <p><strong>Fasilitas</strong> :</p>
                                    <div class="row row-cols-3" >
                                        <div class="col-1 col-lg-1" >
                                            <i class="fas fa-bed"></i>
                                        </div>
                                        <div class="col-8  col-lg-8" >
                                            Kamar Tidur :
                                        </div>
                                        <div class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end" >
                                            2
                                        </div>
                                        <div class="col-1 col-lg-1" >
                                            <i class="fas fa-bath"></i>
                                        </div>
                                        <div class="col-8 col-lg-8" >
                                            Kamar Mandi :
                                        </div>
                                        <div class="col-3 col-lg-3 value-km d-flex justify-content-lg-end" >
                                            2
                                        </div>
                                        <div class="col-1 col-lg-1" >
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="col-8 col-lg-8" >
                                            Luas Bangunan :
                                        </div>
                                        <div class="col-3 col-lg-3 value-lb d-flex justify-content-lg-end" >
                                            60<span>m&sup2;</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#nyobaModal" style="width: 100%;">Detail</button>
                                <a href="" class="btn btn-primary mt-2" style="width: 100%;">Hubungi</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section id="tentang" class="tentang section pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 fasilitas-perum">
                        <h2 class="d-flex justify-content-center">Fasilitas</h2>
                        <div class="row d-flex justify-content-between text-center pt-2">
                            <div class="col-4">
                                <x-mdi-boom-gate-up-outline class="icon-fasilitas"/>
                                <p>One Gate System</p>
                            </div>
                            <div class="col-4">
                                <x-mdi-run class="icon-fasilitas"/>
                                <p>Jogging Track</p>
                            </div>
                            <div class="col-4">
                                <x-mdi-slide class="icon-fasilitas"/>
                                <p>Taman Bermain</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="d-flex justify-content-center">Tentang Kami</h2>
                        <p class="pt-2">Graha Samawa adalah perusahaan kontraktor dan pengembang properti. Graha Samawa didirikan pada tahun 2025, seorang pengusaha muda yang memiliki banyak ide inovatif dalam menciptakan kawasan hunian yang memadukan keindahan, keseimbangan lingkungan, dan kenyamanan bagi penghuninya.</p>
                    </div>
                </div>
            </div>      
        </section>

        <section id="lokasi" class="lokasi section pt-5">
            <div class="container">
                <div class="row align-items-stretch justify-content-between lokasi-item">
                    <div class="col-lg-6 d-flex align-items-center gmap_canvas">
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=bangil&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                        <!-- <style>
                                .gmap_canvas{position:relative;text-align:right;width:600px;height:400px;}
                                .gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}
                        </style> -->
                    <div class="col-lg-6 d-flex justify-content-center flex-column">
                        <div class="d-flex justify-content-center">
                            <h2>Lokasi Kami</h2>
                        </div>
                        <p><strong>Alamat Graha Samawa</strong> : Jl. Raya Cilegon, Bangil, Pasuruan</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eveniet repudiandae necessitatibus numquam in eaque laudantium nam nulla fugiat hic.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum perferendis blanditiis ducimus ullam cupiditate corporis aliquam saepe, nostrum tempora ad.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eum, incidunt ut id voluptatum accusantium, quas nemo perspiciatis odio alias sapiente earum unde saepe repellendus?</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="mediasosial" class="mediasosial section">
            <div class="container">
                <div class="row">
                    <h2 class="d-flex justify-content-center">Ikuti Kami</h2>
                        <div class="sosmed d-flex align-items-center justify-content-center">
                            <a href="https://wa.me/62895366481314" target="_blank" class="me-5"><i class="fa-brands fa-whatsapp"></i><span> 0895366481314</span></a>
                            <a href="https://instagram.com/grahasamawa" target="_blank" class="me-5"><i class="fa-brands fa-instagram"></i><span> @grahasamawa</span></a>
                            <a href="https://www.facebook.com/share/1989vzbmwr/?mibextid=wwXIfr" target="_blank"><i class="fa-brands fa-facebook"></i> <span> Graha Samawa</span></a>
                        </div>
                    
                </div>
            </div>
        </section>

        <footer id="footer" class="footer section position-relative d-flex align-items-center">
            <div class="container copyright text-center mt-4 p-4">
                <p>&copy; Copyright <strong>Testing Website</strong></p>
            </div>
        </footer>

        <!-- MODAL -->
        <div class="modal fade" id="nyobaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Properti</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-2">
                            <div class="col-12 col-md-6">
                                <h5 class="text-dark mb-4">Detail Fasilitas</h5>
                                <div class="row row-cols-3">
                                    <div class="col-1 col-lg-1" >
                                        <i class="fas fa-bed"></i>
                                    </div>
                                    <div class="col-8  col-lg-8" >
                                        Kamar Tidur :
                                    </div>
                                    <div class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end" >
                                        2
                                    </div>
                                    <hr style="width: 100%;">
                                    <div class="col-1 col-lg-1" >
                                        <i class="fas fa-bath"></i>
                                    </div>
                                    <div class="col-8 col-lg-8" >
                                        Kamar Mandi :
                                    </div>
                                    <div class="col-3 col-lg-3 value-km d-flex justify-content-lg-end" >
                                        2
                                    </div>
                                    <hr style="width: 100%;">
                                    <div class="col-1 col-lg-1" >
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="col-8 col-lg-8" >
                                        Luas Bangunan :
                                    </div>
                                    <div class="col-3 col-lg-3 value-lb d-flex justify-content-lg-end" >
                                        60 <span>m&sup2;</span>
                                    </div>
                                    <hr style="width: 100%;">
                                    <div class="col-1 col-lg-1" >
                                        <i class="fas fa-maximize"></i>
                                    </div>
                                    <div class="col-8  col-lg-8" >
                                        Luas Tanah :
                                    </div>
                                    <div class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end" >
                                        72 <span>m&sup2;</span>
                                    </div>
                                    <hr style="width: 100%;">
                                    <div class="col-1 col-lg-1" >
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="col-8  col-lg-8" >
                                        Carport :
                                    </div>
                                    <div class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end" >
                                        1
                                    </div>
                                    <hr style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5 class="text-dark mb-4">Spesifikasi Unit</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates ad dignissimos nemo dolorem perferendis, tempore nisi veritatis quidem accusantium facere at omnis corporis porro sit culpa, beatae, tempora ratione nihil ullam magni? Temporibus, repudiandae fuga! Possimus vel quaerat et tempore ex in, error dolorem voluptas velit fuga nisi exercitationem unde nostrum sint consequuntur neque iure quasi cum ab cumque! Omnis repellat quas aspernatur aliquam laudantium debitis distinctio fugiat nostrum tenetur, delectus inventore obcaecati impedit necessitatibus, nulla, non ad ipsum illum voluptatum dignissimos beatae? Asperiores cum, qui, iure suscipit nemo praesentium iusto dignissimos ad voluptatem eum impedit accusantium temporibus nobis dicta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-primary" style="width: 50%;">Hubungi</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>