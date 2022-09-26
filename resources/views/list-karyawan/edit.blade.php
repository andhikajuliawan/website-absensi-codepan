@extends('layouts.main')

@section('container')
    <form action="{{ route('karyawans.update', ['karyawan' => $users->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container py-4" style="width: 90%">
            <div class="row mx-3 bg-white px-4 py-4 justify-content-evenly shadow-lg" style="border-radius: 10px">
                <div class="col-12 text-center my-3">
                    <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <h4>Form Edit</h4>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Full Name" value="{{ old('email', $users->email) }}" />
                    @error('email')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 ">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="Buat Password Baru ?" value="{{ old('password') }}" />
                    @error('password')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Full Name"
                        @if ($users->level_id === 1) value="{{ old('fullname', $users->admin->nama_lengkap) }}"
                    @else
                    value="{{ old('fullname', $users->karyawan->nama_lengkap) }}" @endif />
                    @error('fullname')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Username" value="{{ old('username', $users->name) }}" />
                    @error('username')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Full Name"
                        @if ($users->level_id === 1) value="{{ old('phone', $users->admin->nomor_hp) }}"
                    @else
                    value="{{ old('phone', $users->karyawan->nomor_hp) }}" @endif />
                    @error('phone')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Divisi</label>
                    <input type="text" name="divisi" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Full Name"
                        @if ($users->level_id === 1) value="{{ old('divisi', $users->admin->divisi) }}"
                    @else
                    value="{{ old('divisi', $users->karyawan->divisi) }}" @endif />
                    @error('divisi')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Level</label>
                    <select class="form-select" name="level" id="inputGroupSelect01">
                        @if ($users->level_id == 1)
                            <option value="1">Admin</option>
                            <option value="2">Karyawan</option>
                        @else
                            <option value="2">Karyawan</option>
                            <option value="1">Admin</option>
                        @endif



                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select class="form-select" name="status" id="inputGroupSelect01">
                        @foreach ($status as $status)
                            <option value="{{ $status->id }}"> {{ $status->nama }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-12">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleFormControlInput1"
                        placeholder="Silahkan Masukkan Alamat Rumah"
                        @if ($users->level_id === 1) value="{{ old('address', $users->admin->alamat) }}"
                    @else
                    value="{{ old('address', $users->karyawan->alamat) }}" @endif />
                    @error('address')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-12 mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Photo</label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" accept="image/*"
                        {{-- @if ($users->level_id === 1)
                    value="{{ old('thumbnail', $users->admin->encrypted_thumbnail) }}"
                @else
                    value="{{ old('thumbnail', $users->karyawan->encrypted_thumbnail) }}" --}} />
                    @error('thumbnail')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-6 d-grid gap-2">
                    <a role="button" class="btn btn-outline-secondary" href="{{ route('karyawans.index') }}">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            <span class="mx-2">Cancel</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 d-grid gap-2">
                    <button type="submit" class="btn btn-outline-secondary">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                            <span class="mx-2">Save</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
