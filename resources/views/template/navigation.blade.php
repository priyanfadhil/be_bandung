@extends('template.application')
@section('body')
<!-- Navbar -->
<div id="hero"></div>
@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
    <div class="container">
        <a class="navbar-brand nav-home" href="/">
            <div class="nav-brand">
                <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/BeBandungLogoOnly-White.png')}}" alt="">
                <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/BeBandungLogoOnly-Color.png')}}" alt="">
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
                    <a class="nav-link" href="#kuliner">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#berita">Berita Terkini</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <button style="background-color:#f8ba10; border: none; color: white; border-radius: 6px;">{{ auth()->user()->name }}</button>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/favorite" method="get"><i class="bi bi-heart"></i> Favorite</a></li>
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


            <!-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><button style="background-color:#f8ba10; border: none; color: white; border-radius: 6px;">Logout</button></a>
                    </li>
                </ul> -->


        </div>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
    <div class="container">
        <a class="navbar-brand nav-home" href="/">
            <div class="nav-brand">
                <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/BeBandungLogoOnly-White.png')}}" alt="">
                <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/BeBandungLogoOnly-Color.png')}}" alt="">
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
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login"><button style="background-color:#f8ba10; border: none; color: white; border-radius: 6px;">Log In</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endauth
@yield('konten')
<!-- End of Navbar -->
@endsection