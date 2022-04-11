@extends('template.navigation')

@section('konten')
<div class="row justify-content-center">
    <div class="col-lg-4">
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" id="myAlert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="myBtn"></button>
            </div>
        @endif
        <main class="form-create">
            <h1 class="h3 mt-5 fw-normal text-center">Tambah Wisata</h1>
            <form action="/{{ $action }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="{{ $method }}" />
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ isset($wisata)?$wisata->name:'' }}">
                    <label for="name" style="color:black">Nama Wisata</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="description" class="form-control @error('description')is-invalid @enderror" id="description" placeholder="Description" required value="{{ isset($wisata)?$wisata->description:'' }}">
                    <label for="description" style="color:black">Deskripsi</label>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="address" class="form-control @error('address')is-invalid @enderror" id="address" placeholder="Address" required value="{{ isset($wisata)?$wisata->address:'' }}">
                    <label for="address" style="color:black">Alamat Wisata</label>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="time" class="form-control @error('time')is-invalid @enderror" id="time" placeholder="Time" required value="{{ isset($wisata)?$wisata->time:'' }}">
                    <label for="time" style="color:black">Jam Buka</label>
                    @error('time')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="phone" class="form-control @error('phone')is-invalid @enderror" id="phone" placeholder="Phone" required value="{{ isset($wisata)?$wisata->phone:'' }}">
                    <label for="phone" style="color:black">Nomor Telepon</label>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="background" class="form-control @error('background')is-invalid @enderror" id="background" placeholder="Background" required value="{{ isset($wisata)?$wisata->background:'' }}">
                    <label for="background" style="color:black">Gambar</label>
                    @error('background')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="facility" class="form-control @error('facility')is-invalid @enderror" id="facility" placeholder="Facility" required value="{{ isset($wisata)?$wisata->facility:'' }}">
                    <label for="facility" style="color:black">Fasilitas Wisata</label>
                    @error('facility')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" style="background-color:#f8ba10; border: none;">Simpan</button>
            </form>
        </main>
    </div>
</div>

@endsection