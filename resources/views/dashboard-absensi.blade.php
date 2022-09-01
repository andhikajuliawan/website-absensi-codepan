@extends('layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row mx-3 bg-white px-2 py-4 shadow" style="border-radius: 10px">
            <div class="col">
                <p class="fw-bold fs-4 text-dark">Absensi</p>
            </div>
            <div class="col text-end">
                <span><a href="#"><button type="button" class="btn btn-primary"
                            style="background-color: #2196f3; font-size: 12px">
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
                        </button></a>
                </span>
                <span><a href="#"><button type="button" class="btn btn-primary"
                            style="background-color: #2196f3; font-size: 12px">
                            <div class="d-flex justify-content-center mb-0">
                                <p class="mb-0 text-xs font-weight-bolder px-1">
                                    Print PDF
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                </svg>
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
            <div class="table-responsive">
                <table class="table table-hover table-sm align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-sm">Employess</th>
                            <th scope="col" class="text-center text-sm">Check In</th>
                            <th scope="col" class="text-center text-sm">Check Out</th>
                            <th scope="col" class="text-center text-sm">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($absensis as $absensi)
                            <tr>
                                <th scope="row">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $absensi->user->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">
                                                {{ $absensi->user->email }}
                                            </p>
                                        </div>
                                    </div>
                                </th>
                                <td class="text-center" style="color: #28a745">
                                    <p class="text-sm font-weight-bold mb-0">{{ $absensi->masuk }}</p>
                                </td>
                                <td class="text-center" style="color: #dc3545">
                                    <p class="text-sm font-weight-bold mb-0">{{ $absensi->keluar }}</p>
                                </td>
                                <td class="text-center">
                                    <p class="text-sm font-weight-bold mb-0">{{ $absensi->statusabsensi->nama }}</p>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
