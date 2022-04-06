<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.carousel.min.css')}}">
{{--    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.min.default.css')}}">--}}
{{--    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.min.green.css')}}">--}}
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />
    <title>be Bandung - beautiful and be Bandung</title>
</head>

<body>
    <!-- Navbar -->
    <div id="hero"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a class="navbar-brand nav-home" href="/">
                <div class="nav-brand">
                    <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}"  alt="">
                    <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/KetapangLogoOnly-Color.png')}}"  alt="">
                </div>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#hero">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#news">Berita</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#wisata">Wisata</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#paket">Kuliner</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#paket">Profil Wilayah</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
  </body>

@yield('konten')
