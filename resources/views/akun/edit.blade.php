@extends('layouts.main')

@section('container')
    <form action="{{ route('akuns.update', ['akun' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid py-4">
            <div class="px-3 my-4">
                <h2 class="text-white">hola {{ $user->name }}</h2>
                <h6 class="text-white" style="width: 60%">
                    This is your profile page. You can see the progress you’ve made with
                    your work and manage your projects or assigned tasks
                </h6>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-md font-weight-bolder text-uppercase">
                                    Edit Profile
                                </p>
                                <button type="submit" class="btn btn-sm ms-auto text-white"
                                    style="background-color: #2196f3">
                                    Save
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-sm font-weight-bolder">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" name="username" type="text"
                                            value="{{ old('username', $user->name) }}" />
                                        @error('username')
                                            <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <input class="form-control" name="email" type="email"
                                            value="{{ old('email', $user->email) }}" />
                                        @error('email')
                                            <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Full Name</label>
                                        <input class="form-control" name="namalengkap" type="text"
                                            @if ($user->level_id == 1) value="{{ old('namalengkap', $user->admin->nama_lengkap) }}"
                                    @else
                                    value="{{ old('namalengkap', $user->karyawan->nama_lengkap) }}" @endif />
                                        @error('namalengkap')
                                            <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Addres</label>
                                        <input class="form-control" name="alamat" type="text"
                                            @if ($user->level_id == 1) value="{{ old('alamat', $user->admin->alamat) }}"
                                        @else
                                        value="{{ old('alamat', $user->karyawan->alamat) }}" @endif />
                                        @error('alamat')
                                            <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile shadow-lg">
                        <img src="{{ asset('assets/img/bg-profile.png') }}" alt="Image placeholder" class="card-img-top" />
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/img/rama.png') }}"
                                            class="rounded-circle img-fluid border border-2 border-white" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3"></div>
                        <div class="card-body pt-0">
                            <div class="text-center">
                                <h5>
                                    @if ($user->level_id == 1)
                                        {{ $user->admin->nama_lengkap }}
                                    @else
                                        {{ $user->karyawan->nama_lengkap }}
                                    @endif
                                </h5>
                                <p class="text-muted text-sm mb-2">{{ $user->email }}</p>

                                <span class="badge bg-gradient-secondary">
                                    @if ($user->level_id == 1)
                                        {{ $user->admin->statuspekerjaan->nama }}
                                    @else
                                        {{ $user->karyawan->statuspekerjaan->nama }}
                                    @endif

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
