<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pengaduan korupsi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/js/app.js')}}" />
</head>

<body>
    <!-- Header Start -->
    <section>
    <div class="container-fluid position-fixed bg-white shadow" id="navbar" height="80">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center ml-5">
                    <img src="{{ ('img/logo.png ') }}" width="80"  class="c-sidebar-brand-full " alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg  navbar-light p-0" >
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <img src="{{ ('img/logo.png ') }}" width="65"  class="c-sidebar-brand-full" alt="Brand Logo">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="beranda" class="nav-item nav-link active">Beranda</a>
                            <a href="cara-pengaduan" class="nav-item nav-link">Cara Pengaduan</a>
                            <a href="tentang" class="nav-item nav-link">Tentang</a>
                        </div>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" >
                                @auth
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline do">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-260px";
        }
        prevScrollpos = currentScrollPos;
        }
    </script>
    </section>
    <!-- Header End -->


    <!-- Carousel Start -->
    <section class="carousel" id="carousel">
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner p-0">
                    <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ ('img/poto1.jpg ') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h2 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Selamat Datang</h2>
                                <h3 class="display-2 text-white mb-4">Website Pengaduan korupsi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{ ('img/poto2.jpg ') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-lg btn-secondary btn-lg-square">
                        <span class="carousel-control-prev-icon"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-lg btn-secondary btn-lg-square">
                        <span class="carousel-control-next-icon"></span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Carousel End -->


    <!-- About Start -->
    <section class="tentang" id="tentang">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded" src="{{ ('img/poto3.jpg ') }}" alt="">
                    </div>
                    <div class="col-lg-7 mt-4 mt-lg-0">
                        <h3 class="mb-4">Selamat datang di pengaduan korupsi</h3>
                        <p>Kata corruptie dalam bahasa Belanda masuk ke dalam perbendaharaan Indonesia menjadi korupsi. Menurut Kamus Besar Bahasa Indonesia (KBBI), korupsi adalah penyelewengan atau penyalahgunaan uang negara (perusahaan, organisasi, yayasan, dan sebagainya) untuk keuntungan pribadi atau orang lain</p>
                        <a href="tentang" class="btn btn-primary mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Berita Start -->
    <section>
    <h1 class="be">Berita singkat</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4 mx-3">
        <div class="col">
            <div class="card">
                <img src="{{('img/poto7.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KPK Periksa Tokoh Masyarakat Cakung Haji Hadiri Terkait Korupsi Pengadaan Lahan di Pulo Gebang</h5>
                    <p class="card-text">Komisi Pemberantasan Korupsi (KPK) memanggil salah satu tokoh masyarakat Cakung, Jakarta Timur, Haji Hadiri untuk diperiksa sebagai saksi dugaan korupsi pengadaan tanah di Kelurahan Pulo Gebang,Sebagai informasi, beberapa waktu lalu KPK mengumumkan telah membuka penyidikan baru kasus dugaan korupsi pengadaan tanah di Kelurahan Pulo Gebang.</p>
                    <p class="card-text"><small class="text-dark">24/11/2022, 12:33 WIB</small></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{('img/poto8.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KPK Tetapkan 4 Tersangka Korupsi Dana Koperasi dan UMKM, Langsung Ditahan</h5>
                    <p class="card-text">Komisi Pemberantasan Korupsi (KPK) menetapkan empat orang sebagai tersangka kasus dugaan korupsi terkait penyaluran dana oleh Lembaga Pengelola Dana Bergulir Koperasi, Usaha Mikro, Kecil, dan Menengah (LPDB-KUMKM) di Provinsi Jawa Barat (Jabar). Usai ditetapkan sebagai tersangka, keempatnya langsung ditahan, Para tersangka diduga telah melakukan perbuatan korupsi terkait penyaluran dana.</p>
                    <p class="card-text"><small class="text-dark">15/09/2022, 17:57 WIB</small></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{('img/poto4.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Korupsi Rp 39,5 Miliar dan TPPU, Mujianto Dituntut 9 Tahun Bui</h5>
                    <p class="card-text">Mujianto, konglomerat asal Medan sekaligus direktur PT Agung Cemara Realty (ACR) dituntut pidana penjara sembilan tahun oleh jaksa penuntut umum (JPU) M Isnayanda di Pengadilan Negeri (PN) Medan. Mujianto dinilai bersalah melakukan korupsi dan tindak pidana pencucian uang.</p>
                    <p class="card-text"><small class="text-dark">18/11/2022, 22:55 WIB</small></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{('img/poto9.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Buron 9 Bulan, Tersangka Korupsi RSUD Bangkinang Riau Ditangkap di Malang</h5>
                    <p class="card-text">Kejaksaan Tinggi Riau kembali menangkap buronan kasus dugaan korupsi pembangunan RSUD Bangkinang, Kampar Tersangka diketahui sebagai Kuasa Direksi PT Gemilang Utama Allen bernama Kiagus Toni Azwarani Tersangka ini sebagai Kuasa Direksi PT Gemilang Utama Allen.</p>
                    <p class="card-text"><small class="text-dark">16/11/2022, 10:42 WIB</small></p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Berita End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white  px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="beranda"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                    <a class="text-white mb-2" href="cara-pengduan"><i class="fa fa-angle-right mr-2"></i>Cara Pengaduan</a>
                    <a class="text-white mb-2" href="tentang"><i class="fa fa-angle-right mr-2"></i>Tentang</a>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>

</html>