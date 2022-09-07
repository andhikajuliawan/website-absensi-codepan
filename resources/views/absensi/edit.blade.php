@extends('layouts.main')

@section('container')
    <form action="{{ route('absensis.update', ['absensi' => $absensi->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container py-4" style="width: 90%">
            <div class="row mx-3 bg-white px-2 py-4 justify-content-evenly shadow-lg" style="border-radius: 10px">
                <div class="col-12 text-center my-3">
                    <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <h4>Form Perizinan</h4>
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Nama Lengkap</h6>
                    <p class="text-sm">
                        @if ($absensi->user->level_id === 1)
                            {{ $absensi->user->admin->nama_lengkap }}
                        @else
                            {{ $absensi->user->karyawan->nama_lengkap }}
                        @endif
                    </p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Permission Type</h6>
                    @if ($absensi->statusabsensi->nama == 'izin')
                        <span class="badge p-1 bg-gradient-warning  px-5">
                            <p class="text-sm font-weight-bold mb-0 text-lowercase">
                                {{ $absensi->statusabsensi->nama }}
                            </p>
                        </span>
                    @else
                        <span class="badge p-1 bg-gradient-danger px-5">
                            <p class="text-sm font-weight-bold mb-0 text-lowercase">
                                {{ $absensi->statusabsensi->nama }}
                            </p>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Date Start</h6>
                    @if ($absensi->masuk)
                        <p class="text-sm">{{ $absensi->masuk }}</p>
                    @else
                        <p class="mx-2">-</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Date Finish</h6>
                    @if ($absensi->keluar)
                        <p class="text-sm">{{ $absensi->keluar }}</p>
                    @else
                        <p class="mx-2">-</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Evidence</h6>
                    @if ($absensi->evidence)
                        <p class="text-sm"> {{ $absensi->evidence }}</p>
                    @else
                        <p class="mx-2">-</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <h6 class="text-sm">Detail</h6>
                    @if ($absensi->evidence)
                        <p class="text-sm">{{ $absensi->detail }}</p>
                    @else
                        <p class="mx-2">-</p>
                    @endif
                </div>
                <div class="col-md-12 mb-5">
                    <h6 class="text-sm">Keterangan</h6>
                    <select class="form-select" name="validate" aria-label="Default select example">
                        <option selected>Pilih persetujuan</option>
                        <option value="1">Diterima</option>
                        <option value="2">Ditolak</option>
                    </select>
                    @error('validate')
                        <p class="text-danger mt-1 mb-1 " style="font-size: 12px">Silahkan pilih persetujuan</p>
                    @enderror
                </div>

                <div class="col-md-6 d-grid gap-2">
                    <a role="button" class="btn btn-outline-secondary" href="{{ route('absensis.index') }}">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            <span class="mx-2">Kembali</span>
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
                            <span class="mx-2">Accept</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
