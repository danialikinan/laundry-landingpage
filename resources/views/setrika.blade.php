<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{!! asset('assets/images/Login 1.png') !!}" type="">

  <title> Quantum Laundry </title>


 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap.css') !!}">

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href= "{!! asset('assets/css/font-awesome.min.css') !!}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href= "{!! asset('assets/css/style.css') !!}" rel="stylesheet">
<!-- responsive style -->
<link href= "{!! asset('assets/css/responsive.css') !!}" rel="stylesheet">

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <div class="Logo">
              <img src="{!! asset('assets/images/Logo.svg') !!}" alt="Logo"/>
            </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="service">Layanan Kami <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about"> Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Temukan Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h2>
            Paket <span>Layanan</span>
          </h2>
          <p>
            Selamat datang di layanan aplikasi laundry kami! 
            Kami dengan bangga mempersembahkan solusi praktis dan efisien untuk kebutuhan pakaian bersih Anda. 
            Dengan fitur yang mudah digunakan, layanan pengantaran terpercaya, dan harga yang kompetitif, 
            kami berkomitmen memberikan pengalaman laundry yang nyaman dan tanpa ribet.</p>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
              <img src="{!! asset('assets/images/Cuci Kering.png') !!}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Reguler
                </h5>
                <p>
                  Pakaian dicuci dengan sistem 1 nota 1 mesin menggunakan bahan yang aman dan terjamin, dengan menggunakan chemical premium dari deterjen, sour hingga softener. 
                  Pakaian akan dikeringkan kemudian dikemas dengan rapih, sehingga dapat menjaga kebersihan dan menjaga pakaian anda tetaop wangi.                  
                </p>
                <a href="https://wa.me/628986828976?text=Saya ingin memesan paket ini" class="btn1">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
              <img src="{!! asset('assets/images/Cuci Kering Setrika.png') !!}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Express
                </h5>
                <p>
                  Pakaian akan dikeringkan kemudian akan melalui tahap setrika menggunakan setrika uap, dimana pada setiap bagian pakaian akan diperhatikan kerapihannya untuk kemudian dikemas dengan rapih, sehingga dapat menjaga kebersihan dan menjaga pakaian anda tetap wangi.
                </p>
                <a href="https://wa.me/628986828976?text=Saya ingin memesan paket ini" class="btn1">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box ">
              <div class="img-box">
              <img src="{!! asset('assets/images/Dry & Clean.png') !!}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Instant
                </h5>
                <p>
                  Layanan sempurna untuk sepatu anda. Nikmati layanan profesional untuk sepatu anda dimana semua sepatu diproses dengan metode dan bahan baku khusus. Dengan keamanan yang terjamin karena menggunakan metode rekam untuk mencegah sepatu anda hilang, rusak atau tertukar.
                  Setiap item kami rawat dan bersihkan sesuai dengan bahan, tipe dan kondisi item agar bersih optimal. Untuk kemudian dikemas secara rapih dan aman.
                </p>
                <a href="https://wa.me/628986828976?text=Saya ingin memesan paket ini" class="btn1">
                  Pesan Sekarang
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Alamat
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jl. Manisi VI, Pasir Biru, Kec. Cibiru, Kota Bandung, Jawa Barat 40614
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +628986828976
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Quantum@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Hari minggu mulai januari 2024 quantum laundry buka dari pukul 10.00 - 16.00 WIB
              Hari biasa buka seperti biasa (08.30-19.00)            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service.html">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="contact.html">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Alamat
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jl. Manisi VI, Pasir Biru, Kec. Cibiru, Kota Bandung, Jawa Barat 40614
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +628986828976
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Quantum@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Hari minggu mulai januari 2024 quantum laundry buka dari pukul 10.00 - 16.00 WIB
              Hari biasa buka seperti biasa (08.30-19.00)            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="service.html">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="" href="contact.html">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

 

  
  <script type="text/javascript" src="{!! asset('assets/js/custom.js') !!}"></script>
   <!-- jQery -->
   <script type="text/javascript" src="{!! asset('assets/js/jquery-3.4.1.min.js') !!}"></script>
   <!-- popper js -->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
   </script>
   <!-- bootstrap js -->
   <script type="text/javascript" src="{!! asset('assets/js/bootstrap.js') !!}"></script>
   <!-- owl slider -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
   </script>
   <!-- custom js -->
   <script type="text/javascript" src="{!! asset('assets/js/custom.js') !!}"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
   </script>
  <!-- End Google Map -->

</body>

</html>