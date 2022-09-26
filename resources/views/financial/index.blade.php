@extends('layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row mx-3 bg-white px-2 py-4 shadow" style="border-radius: 10px">
            <div class="col">
                <p class="fw-bold fs-4 text-dark">Financial</p>
            </div>
            <div class="col text-end">
                <span>
                    <a href="{{ route('financials.create') }}" role="button" class="btn btn-primary"
                        style="background-color: #2196f3">
                        <div class="d-flex justify-content-center mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                            <p class="mb-0 text-xs font-weight-bolder px-1">
                                Add
                            </p>
                        </div>
                    </a>
                </span>
                <span>
                    <a href="#" role="button" class="btn btn-primary" style="background-color: #2196f3">
                        <div class="d-flex justify-content-center mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                            </svg>
                            <p class="mb-0 text-xs font-weight-bolder px-1">
                                Print PDF
                            </p>
                        </div>
                    </a>
                </span>
                <span>
                    <a href="#" role="button" class="btn btn-primary" style="background-color: #2196f3">
                        <div class="d-flex justify-content-center mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-funnel" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                            </svg>
                            <p class="mb-0 text-xs font-weight-bolder px-1">
                                Sort
                            </p>
                        </div>
                    </a>
                </span>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-sm align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Tanggal
                            </th>
                            <th scope="col" class="text-sm font-weight-bolder">
                                Detail
                            </th>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Pemasukan
                            </th>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Pengeluaran
                            </th>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($financials as $financial)
                            <tr>
                                <td class="text-center text-sm" scope="row">{{ $financial->tanggal }}</td>
                                <td class=" text-sm">{{ $financial->name }}</td>
                                <td class="text-center text-sm" style="color: #28a745">
                                    {{ $financial->pemasukan > 0 ? 'Rp.' . $financial->pemasukan : '-' }}</td>
                                <td class="text-center text-sm" style="color: #dc3545">
                                    {{ $financial->pengeluaran > 0 ? 'Rp.' . +$financial->pengeluaran : '-' }}
                                </td>
                                <td class="text-center text-sm d-flex align-content-center justify-content-center">
                                    @include('financial.action')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
