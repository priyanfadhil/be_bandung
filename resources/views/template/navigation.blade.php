<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>be Bandung | {{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.carousel.min.css')}}">
    {{-- <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.min.default.css')}}">--}}
    {{-- <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.min.green.css')}}">--}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />


    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                $("#myAlert").alert("close");
            });
        });
    </script>

</head>

<body>
    <!-- Navbar -->
    <div id="hero"></div>
    @auth
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a class="navbar-brand nav-home" href="/">
                <div class="nav-brand">
                    <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}" alt="">
                    <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/KetapangLogoOnly-Color.png')}}" alt="">
                </div>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <button style="background-color:#f8ba10; border: none; color: white; border-radius: 6px;">{{ auth()->user()->name }}</button>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/favorite"><i class="bi bi-heart"></i> Favorite</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a class="navbar-brand nav-home" href="/">
                <div class="nav-brand">
                    <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}" alt="">
                    <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/KetapangLogoOnly-Color.png')}}" alt="">
                </div>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><button style="background-color:#f8ba10; border: none; color: white; border-radius: 6px;">Log In</button></a>
                        </li>
                    </ul>

                </ul>
            </div>
        </div>
    </nav>

    @endauth
    <!-- End of Navbar -->
</body>

@yield('konten')