@extends('layouts.app')

@section('content')
    <main class="main-content mt-0" style="background-color: #fff">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto px-0 py-6"
                            style="background-color: #fff; border-radius: 20px 0 0 20px">
                            <div class="card card-plain">
                                <div class="pb-0 text-center">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="E-mail"
                                                style="
                                                background-color: #fff;
                                                border: 0px;
                                                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.24),
                                                    -4px -4px 10px rgba(255, 255, 255, 1);
                                                ">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password"
                                                style="
                                                background-color: #fff;
                                                border: 0px;
                                                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.24),
                                                  -4px -4px 10px rgba(255, 255, 255, 1);
                                                ">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-lg w-100 mt-4 mb-0 fs-6"
                                                style="
                                                  background-color: #fff;
                                                  border: 0px;
                                                  box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.24),
                                                    -4px -4px 10px rgba(255, 255, 255, 1);
                                                  ">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        <a href="javascript:;" class="font-weight-bold" style="color: #716f6f">Forgot your
                                            password</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto px-0"
                            style="background-color: #2196f3; border-radius: 0 20px 20px 0">
                            <div class="row text-center mt-9">
                                <img src="../assets/img/logo codepan.png" style="width: 70%; margin: auto" />
                                <h3 class="mt-3" style="color: white; font-weight: 900">
                                    Welcome to <br />
                                    Codepan Studio
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
