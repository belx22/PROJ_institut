<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->  
     
  <!-- Favicons -->
  <link href="{{ asset('storage/settings/z6Pmut9pfSovcS9fSSYgxnAqUFVuaHHc64mRRrrx.jpg')}}" rel="icon">
  <link href="{{ asset('home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('home/assets/css/main.css')}}" rel="stylesheet">

        <!-- Scripts -->
        <style>
                footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 20px;
                font-size: 0.9rem;
                }

                footer a {
                color: #32cd32;
                text-decoration: none;
                }

                footer a:hover {
                text-decoration: underline;
                }

        </style>
      
    </head>
    <body class="index-page">

    

        @include("layouts.partials.navbar")

        <main class="main">

            @yield('content')

        </main>




        @include("layouts.partials.footer")

         <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
          <!-- Vendor JS Files -->
  <script src="{{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('home/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('home/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('home/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('home/assets/js/main.js')}}"></script>
    </body>
</html>