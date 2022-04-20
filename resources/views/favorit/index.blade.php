@extends('template.application')
@section('body')
<section class="landing wisata" id="kuliner">
    <div style="padding-top: 60px" class="container">
        <div style="text-align: center;">
            <h2 style="margin-top:10px">Kuliner Favotitmu</h2>
        </div>
    </div>

    <div class="owl-carousel owl-theme">
    @foreach ($UserWisata as $data)
        <div class="item">
            @dd($data->user->name)
            <div class="item-image">
                @if($data->wisata->background)
                <img class="item-image " src="<?php echo (asset('storage/'.$data->wisata->name)); ?>" width="auto" alt="">
                @else
                <img class="item-image " src="https://source.unsplash.com/300x300" width="auto" alt="">
                @endif
            </div>
            <span class="item-kicker">{{ $data->wisata->name }}</span>
            <h3 class="item-title mb-3">{{ $data->wisata->address }}</h3>
            @auth
            @if(auth()->user()->is_admin)
            <button type="button" class="btn btn-primary"><a href="/kuliner/{{ $data->wisata->id }}/edit" style="text-decoration: none; color: white">Update</a></button>
            <button type="button" class="btn btn-light"><a href="/kuliner/{{ $data->wisata->id }}" style="text-decoration: none; color: black">Detail</a></button>

            <form action="/kuliner/{{ $data->wisata->id }}" method="post" class="d-inline" onsubmit="return confirm('ingin menghapus data ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            @endif
            @else
            <button type="button" class="btn btn-light"><a href="/wisata/{{ $data->wisata->id }}" style="text-decoration: none; color: black">Detail</a></button>
            @endauth
        </div>
        @endforeach
    </div>
    
    <div class="features-slanted"></div>
    <br><br>
</section>
@endsection