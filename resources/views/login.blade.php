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
  <link rel="shortcut icon" href="{!! asset('assets/images/Logo 1.png') !!}" type="">

  <title> Quantum Laundry </title>



   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap.css') !!}">

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href= "{!! asset('assets/css/font-awesome.min.css') !!}" rel="stylesheet">

<link href= "{!! asset('assets/css/login.css') !!}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href= "{!! asset('assets/css/style.css') !!}" rel="stylesheet">
<!-- responsive style -->
<link href= "{!! asset('assets/css/responsive.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/') }}">
              <div class="Logo">
              <img src="{!! asset('assets/images/Logo.svg') !!}" alt="Logo"/>
            </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/service') }}">Layanan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/contact') }}">Temukan Kami</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/login') }}"> <i class="fa fa-user" aria-hidden="true"></i> Login<span class="sr-only">(current)</span></a></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <article class="border">
        <h1>Login</h1>
        <section class="inputs">
            <p class="laple">Username</p>
            <i class=" info fa-regular fa-user"></i>
            <input placeholder="Type your Username" type="text">
            <hr>
            <P class="error"></P>
            <P class="error"></P>
            <P class="error"></P>
            <p class="laple">Password</p>
            <i class=" info fa-solid fa-lock"></i>
            <input class="pass" placeholder="Type your Password" type="password">
            <i id="showen" class="show fa-solid fa-eye"></i>
            <i id="hiddin" class="hiddin fa-solid fa-eye-slash"></i>
            <hr class="hhr">
            <P class="error error1"></P>
            <a class="Forget" href="verfication_forget_pass.html">
                <p>Forgot password?</p>
            </a>
        </section>
        <section>
            <button onclick="location.href='/adminservice';">Login</button>
        </section>
        </section>
    </article>
    <script src="JS/login.js"></script>
    




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

</body>

</html>