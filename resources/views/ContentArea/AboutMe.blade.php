<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
  <head>

    <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope-fill"></i><a href="/cdn-cgi/l/email-protection#c4a7abaab0a5a7b084a1bca5a9b4a8a1eaa7aba9"><span class="__cf_email__" data-cfemail="caa3a4aca58aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</span></a>
      <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
    </div>
    <div class="social-links d-none d-md-block">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">Green</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ asset('project') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('about-me') }}">AboutMe</a></li>
        <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

  </header>
  <main>
      <!-- ======= About Us Section ======= -->
  <section id="AboutMe" class="AboutMe ">
    <div class="container">
  
      <div class="section-title text-center">
        <h2>About Us</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
  
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="/img/about.jpg" class="container" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- End About Us Section  --}}

  </main>
  <footer>
    @include('Footer.footer')
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <!-- Vendor JS Files -->
  <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}""/"></script>

  <script async src="{{ asset('https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP') }}"></script><script>if( window.self == window.top ) { window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P7JSYB1CSP'); } </script>
<script defer src="{{ asset('https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317') }}" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82b0dec50d85ba5f","version":"2023.10.0","token":"68c5ca450bae485a842ff76066d69420"}' crossorigin="anonymous"></script>
</body>

</html>