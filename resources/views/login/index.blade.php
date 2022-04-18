@extends('template.application')
@section('body')

<div class="row justify-content-center">
    <div class="col-lg-3">
        @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert" id="myAlert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="myBtn"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" id="myAlert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="myBtn"></button>
        </div>
        @endif

        <main class="form-signin">
            <div class="nav-brand" style="padding-left: 40%;">
                <a href="/"><img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/BeBandungLogoOnly-Color.png')}}" alt="logo"></a>
            </div>
            <h1 class="h3 mt-5 fw-normal text-center">Please Login</h1>
            <br>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email" style="color:black">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password" style="color:black">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color:#f8ba10; border: none;">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection