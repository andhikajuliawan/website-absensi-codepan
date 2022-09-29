@extends('layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row mx-3 bg-white px-2 py-4 shadow" style="border-radius: 10px">
            <div class="col">
                <p class="fw-bold fs-4 text-dark">Absensi</p>
            </div>
            <div class="col text-end">
                <span><a href="{{ route('absensis.downloadQR') }}">
                        <button type="button" class="btn btn-primary" style="background-color: #2196f3; font-size: 12px">
                            <div class="d-flex justify-content-center mb-0">
                                <p class="mb-0 text-xs font-weight-bolder px-1">Print Qr</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-qr-code" viewBox="0 0 16 16">
                                    <path d="M2 2h2v2H2V2Z" />
                                    <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                    <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                    <path
                                        d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                    <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                                </svg>
                            </div>
                        </button>
                    </a>
                </span>
                <span>
                    <a href="#"><button type="button" class="btn btn-primary"
                            style="background-color: #2196f3; font-size: 12px">
                            <div class="d-flex justify-content-center mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                <p class="mb-0 text-xs font-weight-bolder" style="margin-left: 6px">
                                    Excel
                                </p>

                            </div>
                        </button>
                    </a>
                </span>
                <span>
                    <a href="#"><button type="button" class="btn btn-primary"
                            style="background-color: #2196f3; font-size: 12px">
                            Sort By
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-funnel" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                            </svg>
                        </button>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-sm align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-sm">Employess</th>
                                <th scope="col" class="text-center text-sm">Date</th>
                                <th scope="col" class="text-center text-sm">Check In</th>
                                <th scope="col" class="text-center text-sm">Check Out</th>
                                <th scope="col" class="text-center text-sm">Status</th>
                                <th scope="col" class="text-center text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absensis as $absensi)
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                @if ($absensi->user->leveluser->nama === 'admin')
                                                    @if ($absensi->user->admin->encrypted_thumbnail)
                                                        <img src="{{ asset('storage/thumbnails/' . $absensi->user->admin->encrypted_thumbnail) }}"
                                                            alt="picture-img" class="avatar avatar-sm me-3" />
                                                    @else
                                                        <img src="../assets/img/team-3.jpg" alt="picture-img"
                                                            class="avatar avatar-sm me-3" />
                                                    @endif
                                                @else
                                                    @if ($absensi->user->karyawan->encrypted_thumbnail)
                                                        <img src="{{ asset('storage/thumbnails/' . $absensi->user->karyawan->encrypted_thumbnail) }}"
                                                            alt="picture-img" class="avatar avatar-sm me-3" />
                                                    @else
                                                        <img src="../assets/img/team-3.jpg" alt="picture-img"
                                                            class="avatar avatar-sm me-3" />
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $absensi->user->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $absensi->user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="text-center">
                                        <p class="text-sm font-weight-bold mb-0">
                                            {{ $absensi->tanggal }}
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        @if ($absensi->masuk == null)
                                            <p class="text-sm font-weight-bold mb-0" style="color: gray">
                                                -
                                            </p>
                                        @else
                                            <p class="text-sm
                                                font-weight-bold mb-0"
                                                style="color: #28a745">
                                                {{ $absensi->masuk }}
                                            </p>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($absensi->keluar == null)
                                            <p class="text-sm font-weight-bold mb-0" style="color: gray">
                                                -
                                            </p>
                                        @else
                                            <p class="text-sm
                                                font-weight-bold mb-0"
                                                style="color: #dc3545">
                                                {{ $absensi->keluar }}
                                            </p>
                                        @endif
                                    </td>
                                    <td class="text-center">

                                        @if ($absensi->statusabsensi->nama == 'hadir')
                                            <span class="badge p-1 bg-gradient-success" style="width: 70%">
                                                <p class="text-sm font-weight-bold mb-0 text-lowercase">
                                                    {{ $absensi->statusabsensi->nama }}
                                                </p>
                                            </span>
                                        @elseif ($absensi->statusabsensi->nama == 'izin')
                                            <span class="badge p-1 bg-gradient-warning " style="width: 70%">
                                                <p class="text-sm font-weight-bold mb-0 text-lowercase">
                                                    {{ $absensi->statusabsensi->nama }}
                                                </p>
                                            </span>
                                        @else
                                            <span class="badge p-1 bg-gradient-danger" style="width: 70%">
                                                <p class="text-sm font-weight-bold mb-0 text-lowercase">
                                                    {{ $absensi->statusabsensi->nama }}
                                                </p>
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($absensi->validate == false)
                                            <a role="button"
                                                href="{{ route('absensis.edit', ['absensi' => $absensi->id]) }}"
                                                class="text-sm btn btn-danger btn-sm mb-0 p-1" style="width: 70%">

                                                <span>Check {{ $absensi->statusabsensi->validate }}</span>
                                            </a>
                                        @else
                                            <a role="button"
                                                href="{{ route('absensis.show', ['absensi' => $absensi->id]) }}"
                                                class="text-sm btn btn-outline-secondary btn-sm mb-0 p-1"
                                                style="width: 70%">View {{ $absensi->statusabsensi->validate }}
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{-- </div><a href="{{ route('absensis.autoCheckOut') }}" id="autoCheckOut"> tes</a> --}}
            </div>
        </div>
    @endsection
