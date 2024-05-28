<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../../../assets/images/logo-cyborg1.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg | {{ $title }}</title>
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="../../../assets/css/navbar.css">

     <!-- Bootstrap icons CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>
  {{-- header --}}
  @include('layouts.header')
  {{-- akhir header --}}

  {{-- content --}}
  @yield('content')
  {{-- akhir content --}}

  {{-- footer --}}
  @include('layouts.footer')
  {{-- akhir footer --}}
</body>

</html>