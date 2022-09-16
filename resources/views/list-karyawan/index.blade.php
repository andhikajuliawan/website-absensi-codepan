@extends('layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row mx-3 bg-white px-2 py-4" style="border-radius: 10px">
            <div class="col">
                <p class="fw-bold fs-4 text-dark">List Karyawan</p>
            </div>
            <div class="col text-end">
                <a href="{{ route('karyawans.create') }}">
                    <button type="button" class="btn btn-primary" style="background-color: #2196f3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                        Add
                    </button>
                </a>
            </div>
            {{-- <div class="card"> --}}
            <div class="table-responsive">
                <table class="table px-3">
                    <thead class="fs-6">
                        <tr>
                            <th scope="col" class="text-sm font-weight-bolder">
                                Employess
                            </th>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Position
                            </th>
                            <th scope="col" class="text-center text-sm font-weight-bolder">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table align-middle">
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row" style="width: 50%">
                                    <div class="row">
                                        <div class="d-flex">
                                            <div>
                                                @if ($user->leveluser->nama === 'admin')
                                                    @if ($user->admin->encrypted_thumbnail)
                                                        <img src="{{ asset('storage/thumbnails/' . $user->admin->encrypted_thumbnail) }}"
                                                            alt="picture-img" class="avatar avatar-sm me-3" />
                                                    @else
                                                        <img src="../assets/img/team-3.jpg" alt="picture-img"
                                                            class="avatar avatar-sm me-3" />
                                                    @endif
                                                @else
                                                    @if ($user->karyawan->encrypted_thumbnail)
                                                        <img src="{{ asset('storage/thumbnails/' . $user->karyawan->encrypted_thumbnail) }}"
                                                            alt="picture-img" class="avatar avatar-sm me-3" />
                                                    @else
                                                        <img src="../assets/img/team-3.jpg" alt="picture-img"
                                                            class="avatar avatar-sm me-3" />
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <td class="text-center">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">
                                            @if ($user->leveluser->nama === 'admin')
                                                {{ $user->admin->divisi }}
                                                @else{{ $user->karyawan->divisi }}
                                            @endif
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            @if ($user->leveluser->nama === 'admin')
                                                {{ $user->admin->statuspekerjaan->nama }}
                                                @else{{ $user->karyawan->statuspekerjaan->nama }}
                                            @endif
                                        </p>
                                    </div>
                                </td>
                                <td class="text-center text-sm ">
                                    @include('list-karyawan.action')
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
