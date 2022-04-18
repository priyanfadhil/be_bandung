@extends('template.application')

@section('body')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <div class="nav-brand" style="padding-left: 42%;">
                <a href="/"><img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/BeBandungLogoOnly-Color.png')}}" alt="logo"></a>
            </div>
            <h1 class="h3 mt-5 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name" style="color:black">Full Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username" style="color:black">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email address" required value="{{ old('email') }}">
                    <label for="email" style="color:black">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password" style="color:black">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" style="background-color:#f8ba10; border: none;">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already register? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection