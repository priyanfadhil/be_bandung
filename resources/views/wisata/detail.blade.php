@extends('template.navigation')

@section('konten')
    <!-- Detail Hero -->
    <section style="background-image: url({{ asset('storage/' . $data->background) }})" class="hero-detail">

        <div class="container d-flex flex-column-reverse align-items-start">
            <p style="color:white" class="detail-text-hl">{{ $data->address }}</p>
            <span class="detail-title">{{ $data->name }}</span>
        </div>
        <div class="hero-bg"></div>
    </section>
    <!-- End of Detail Hero -->

    <!-- Detail Content (Deskripsi) -->
    <div class="container">
        <div class="row" style="margin-top:5%">
            <div class="col-md-4 detail-content-desc">
                <h3 class="title-content">About</h3>
                <p class="content-text">
                    {{ $data->description }}
                </p>
            </div>
            <div class="col-md-8 detail-content-inf">
                <h3 class="title-content">Information</h3>
                <div class="group-content-information">
                    <h6>Nama</h6>
                    <p class="content-text">
                        {{ $data->name }}
                    </p>
                </div>
                <div class="group-content-information">
                    <h6>Alamat</h6>
                    <p class="content-text" id="alamatWisata">
                        {{ $data->address }}
                    </p>
                </div>
                <div class="group-content-information">
                    <h6>Jam Buka</h6>
                    <p class="content-text">
                        {{ $data->time }}
                    </p>
                </div>
                <div class="group-content-information">
                    <h6>Telepon</h6>
                    <p class="content-text">
                      @if($data->phone)
                      {{ $data->phone }}
                      @else
                      -
                      @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3 class="title-content text-center">Gallery</h3>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="owl-carousel owl-theme anu">
            @foreach($gallery as $g)
            <div class="item" style="background: none">
                <div class="item-image">
                    <img class="item-image " src="{{asset('assets/images/galeri_wisata')}}/{{ $g->image }}"  width="auto" alt="">
                </div>
            </div>
            @endforeach
        </div>
      <div>
    </div>

    <div class="map-detail" id="map"></div>

    <!-- Detail Content (Deskripsi)-->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
          <div style="text-align: center;">
            <img src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}" width="150px" alt="Logo">
             <span class="font-segoe text-center nopadding" style="color: #f5f5f5; ">&#8212; &nbsp; Copyright &copy; 2022 - be Bandung - Telkom University</span>
          </div>
        </div>
    </section>

    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
     <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5zc7V4uJ25QXuT7FZRmcFkHs9s2iB1u0&v=beta&callback=initMap"
                  async defer></script>
    <script>
    $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay:true,
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
        items: 4,
      }
    }
  });


    // AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -6.903363, lng: 107.6081381 },
        zoom: 16
      });

      const geocoder = new google.maps.Geocoder();

      geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {
      const address = $("#alamatWisata").text();
      geocoder.geocode({ address: address }, function(res, status) {
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
    </script>
    </div>
@endsection
<!-- Footer  -->
