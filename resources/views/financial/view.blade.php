@extends('layouts.main')

@section('container')
    <div class="container py-4" style="width: 90%">
        <div class="row mx-3 bg-white px-2 py-4 justify-content-evenly shadow-lg" style="border-radius: 10px">
            <div class="col-12 text-center my-3">
                <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <h4>Form View</h4>
            </div>
            <div class="col-md-6">
                <h6 class="text-sm">Name</h6>
                <p class="text-sm">{{ $financial->name }}</p>
            </div>
            <div class="col-md-6">
                <h6 class="text-sm">Date</h6>
                <p class="text-sm">{{ $financial->tanggal }}</p>
            </div>
            <div class="col-md-6">
                <h6 class="text-sm">Status</h6>
                <p class="text-sm">{{ $financial->pemasukan === 0 ? 'Pengeluaran' : 'Pemasukan' }}</p>
            </div>
            <div class="col-md-6">
                <h6 class="text-sm">Nominal</h6>
                <p class="text-sm">{{ $financial->pemasukan === 0 ? $financial->pengeluaran : $financial->pemasukan }}</p>
            </div>
            <div class="col-md-12 mb-5">
                <h6 class="text-sm">Detail</h6>
                <p class="text-sm">
                    {{ $financial->detail }}
                </p>
            </div>

            <div class="col-md-6 d-grid gap-2">

                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('financials.index') }}">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            <span class="mx-2">Kembali</span>
                        </div>
                    </a>
                </button>

            </div>
            <div class="col-md-6 d-grid gap-2">

                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('financials.edit', ['financial' => $financial->id]) }}">
                        <div class="d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                            <span class="mx-2">Edit</span>
                        </div>
                    </a>
                </button>

            </div>


        </div>
    </div>
@endsection
