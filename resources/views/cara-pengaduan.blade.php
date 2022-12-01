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
                            <a href="beranda" class="nav-item nav-link ">Beranda</a>
                            <a href="cara-pengaduan" class="nav-item nav-link active">Cara Pengaduan</a>
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

            <!-- content -->
            <div class="main-content">
                <h3 class="text">Cara Melapor</h3>
                <hr/>
                <img class="img-cara img-responsive shadow" src="images/cara.png" alt="">
                <br>
        		<ol>
        			<li><p>Klik tombol &quot;Login&quot;, lalu isikan Username dan Password Anda.</p></li>
        			<li><p>Jika Anda belum terdaftar, maka klik tombol &quot;Register&quot; dan isikan data diri Anda lalu klik tombol &quot;Submit&quot;, maka Anda akan otomatis login ke Aplikasi</p></li>
        			<li><p>Buat Nama Samaran (Username) dan Kata Sandi (Password) yang Anda ketahui sendiri.</p></li>
        			<li><p>Gunakan nama yang unik dan tidak menggambarkan identitas Anda.</p></li>
        			<li><p>Klik menu &quot;Pengaduan&quot; untuk merekam pengaduan baru.</p></li>
        			<li><p>Klik tombol &quot;Tambah Pengaduan&quot; untuk menambahkan pengaduan baru.</p></li>
        			<li><p>Isi form Tambah Pengaduan sesuai informasi yang Anda ketahui, lalu klik tombol &quot;Lanjut&quot;.</p></li>
        			<li><p>Perhatikan beberapa hal di bawah ini:<br />Semua kotak yang diberi tanda (*) wajib diisi.<br />Pastikan informasi yang diberikan sedapat mungkin memenuhi unsur 4W 1H.</p></li>
        			<li><p>Jika Anda memiliki bukti dalam bentuk file seperti foto atau dokumen lain, silakan dilengkapi di halaman pengaduan, caranya:<br />Setelah membaca petunjuk untuk menyertakan lampiran, klik kotak kecil di bawah petunjuk tersebut, dan lanjutkan prosesnya.</p></li>
        			<li><p>Setelah selesai mengisi, silakan klik tombol &quot;Kirim&quot; untuk melanjutkan atau klik tombol &quot;Hapus&quot; untuk membatalkan proses pelaporan Anda.</p></li>
        			<li><p>Halaman berikutnya memberi kesempatan bagi Anda yang ingin mencetak nomor register pengaduan.</p></li>
        			<li><p>Catat dan simpan dengan baik Nama Samaran (Username) dan Kata Sandi (Password).</p></li>
        			<li><p>Simpan dengan baik nomor register yang Anda peroleh saat menunjukkan pengaduan untuk mengetahui status/tindak lanjut pengaduan yang Anda sampaikan.</p></li>
        			<li><p>Untuk Bantuan dan Saran mengenai cara melaporkan pengaduan, bisa ditanyakan melalui form Bantuan dan Saran yang telah tersedia di aplikasi.</p></li>
        			<li><p>Kementerian Komunikasi dan Informatika akan menghubungi Anda melalui saluran yang telah Anda cantumkan dalam form pengaduan apabila pengaduan yang Anda sampaikan belum memenuhi kriteria untuk ditindaklanjuti.</p></li>
        		</ol>

            <!-- end main-content -->
            </div>

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
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
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