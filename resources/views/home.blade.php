@extends('template.navigation')

@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Hero Landing-->
<section class="hero">
    <div class="hero-overlay">
        <span></span>
        <span></span>
    </div>
    <div class="hero-slanted">
        <span></span>
        <span></span>
    </div>

    <div class="hero-content d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="header">
                        <h1>be Bandung</h1>
                        <h4 style="margin-top: -10px">(beautiful Bandung)</h4>
                        <br>
                        <p>
                            Temukan dan Jelajahi Beragam Tempat Wisata Nan Indah Dan Menarik <br>
                            Di <strong>Wisata Kota dan Kabupaten Bandung, Jawa Barat</strong> <br>
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="landing city">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Kota Bandung <br>Jawa Barat</h2>
                    <p style="margin-top: -25px">
                        Sensasi panorama alam yang eksotik, hawa yang sejuk dan suasana kota kembang yang khas
                        merupakan salah satu ciri khas yang unik <br>dari <b>Kota Bandung, Jawa Barat.</b>
                        Menikmati indahnya alam serta nikmatnya kuliner di Bandung merupakan pengalaman yang tak terlupakan.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="mapDesa" id="mapDesa"></div>
                </div>
            </div>
        </div>
    </section>

<section class="landing features">
    <div class="container features-content">
        <div class="row ">
            <div class="col-md-4">
                <img src="{{url('assets/images/highlight/kuliner.png')}}" width="120px" alt="">
                <h3>Kuliner</h3>
                <p>
                    Kuliner enak dan murah meriah memang identik dengan kota yang satu ini, kuliner jajanan yang unik dan legendaris menggoyang lidah pun ada disini. Temui dan rasakan bedanya.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{url('assets/images/highlight/wisata.png')}}" width="120px" alt="">
                <h3>Wisata Kota</h3>
                <p>
                    Destinasi wisata serta pemandangan alam yang di gemari wisatawan lokal maupun mancanegara sangatlah beraneka ragam dan cocok untuk dikunjungi untuk berlibur dan bersantai.
                </p>

            </div>
            <div class="col-md-4">
                <img src="{{url('assets/images/highlight/alam.png')}}" width="120px" alt="">
                <h3>Wisata Alam</h3>
                <p>
                    Selain memiliki berbagai destinasi wisata kotanya, Bandung memiliki destinasi wisata alam yang sangat mempesona untuk bersantai bersama keluarga dan juga teman.
                </p>

            </div>
        </div>
    </div>
    <div id="news"></div>
</section>

<section class="landing news">
    <div class="container">
        <h2>Sudut Pandang be Bandung</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G2.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G2.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">

                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G4.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G4.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G5.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G5.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G1.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G1.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G6.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G6.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a href="{{ asset('assets/images/galeri/G3.jpg') }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('assets/images/galeri/G3.jpg') }}" class="zoom img-fluid" alt="Desa Pasanggrahan">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="landing wisata" id="wisata">
    <div style="padding-top: 60px" class="container">
        <div style="text-align: center;">
            <h2 style="margin-top:10px">Wisata Bandung</h2>
        </div>
        <!-- <a href="/wisata/create" class="btn d-inline-flex mb-md-0 btn-try text-white" style="background-color:#f8ba10; border: none; color: white;">Tambah Wisata</a> -->
        
    
    </div>

    

    <!-- <div class="owl-carousel owl-theme">
        @foreach($wisata as $data)
        <div class="item">
            <a href="/wisata/{{ $data->id }}" style="text-decoration: none;">
                <div class="item-image">
                    <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}" width="auto" alt="">
                </div>
                <div class="item-text">
                    <span class="item-kicker">{{ $data->name }}</span>
                    <h3 class="item-title">{{ $data->address }}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div> -->

    <div class="owl-carousel owl-theme">
        @foreach($wisata as $data)
        <div class="item">
            <div class="item-image">
                @if($data->background)
                <img class="item-image " src="{{ asset('storage/' . $data->background) }}" width="auto" alt="">
                @else
                <img class="item-image " src="https://source.unsplash.com/300x300" width="auto" alt="">
                @endif
            </div>
            <div class="item-text d-inline">
                <span class="item-kicker">{{ $data->name }}</span>
                <h3 class="item-title">{{ $data->address }}</h3>
                <button type="button" class="btn btn-primary"><a href="/wisata/{{ $data->id }}/edit" style="text-decoration: none; color: black">Update</a></button>
                <button type="button" class="btn btn-light"><a href="/wisata/{{ $data->id }}" style="text-decoration: none; color: black">Detail</a></button>
                
                <form action="/wisata/{{ $data->id }}" method="post" class="d-inline" onsubmit="return confirm('ingin menghapus data ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="header-4-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <!-- Left Column -->
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                <a href="/wisata/create" class="btn d-inline-flex mb-md-0 btn-try text-white">Tambah Wisata</a>       
            </div>
    </div>

    <div class="features-slanted"></div>
    <br><br>
</section>

<div class="header-4-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
    <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                <h1 class="title-text-big">
                    Cita Rasa<br class="d-lg-block d-none" />
                    <div class ="font">be Bandung</div>
                </h1>
                <p> Menyajikan rekomendasi berbagai macam kuliner khas Bandung yang 
                    dapat memanjakan lidah wisatawan <strong>Bandung</strong> </p>
                <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                    <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                        Lihat Kuliner
                    </button>
                    <button class="btn btn-outline">
                        <div class="d-flex align-items-center">
                            <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                            </svg>
                            Lihat Lokasi
                        </div>
                    </button>
                </div>
            </div>
            <!-- Right Column -->
            <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
                <img id="img-fluid" class="h-auto mw-100" src="{{ asset('assets/images/galeri/kuliner.svg') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<section class="landing news">
    <div class="container">
        <h2>Berita Bandung</h2>
        <div class="row" id="newsContainer"></div>
    </div>
</section>

<!-- Footer  -->
<section style="margin-top:0!important" class="footer">
    <div class="container">
        <div style="text-align: center;">
            <img src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}" width="150px" alt="Logo">
            <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright&copy;2022 - be Bandung - Jawa Barat</font>
        </div>
    </div>
</section>
<!-- End of Footer  -->
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5zc7V4uJ25QXuT7FZRmcFkHs9s2iB1u0&v=beta&callback=initMap" async defer></script>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("mapDesa"), {
            center: {
                lat: -6.914744,
                lng: 107.609810
            },
            zoom: 16
        });

        const geocoder = new google.maps.Geocoder();

        geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {
        const address = "Kota Bandung, Jawa Barat"
        geocoder.geocode({
            address: address
        }, function(res, status) {
            if (status == "OK") {
                mapResults.setCenter(res[0].geometry.location);
                const marker = new google.maps.Marker({
                    map: mapResults,
                    position: res[0].geometry.location
                });
            } else {
                console.log(status);
            }
        });
    }

    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });

    // Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        dots: false,
        nav: false,
        autoplay: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 2,
                stagePadding: 10,
            },
            600: {
                items: 3,
                margin: 10,
                stagePadding: 40,
            },
            1000: {
                items: 4
            }
        }
    });

    // Fetch News API
    const newsUrl =
        "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=wisata%20desa&language=id";
    axios.get(newsUrl).then(resp => {
        for (let i = 0; i < 6; i++) {
            var d = new Date(resp.data.articles[i].publishedAt);
            d = d.getDate() + '-' + (d.getMonth() + 1) + '-' + d.getFullYear() + ' ' + (d.getHours() > 12 ? d.getHours() - 12 : d.getHours()) + ':' + d.getMinutes() + ' ' + (d.getHours() >= 12 ? "PM" : "AM");
            $("#newsContainer").append(`
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <a href="${resp.data.articles[i].url}" target="_blank">
                        <div class="news-card" style='background-image:url("${
                                        resp.data.articles[i].urlToImage
                                    }")'>
                            <div class="news-content">
                                    <h5>${resp.data.articles[i].title}</h5>
                                    <p>${ d }</p>
                            </div>
                        </div>
                    </a>
                </div>
                `);
        }
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection