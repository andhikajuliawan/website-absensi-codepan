@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table ">
                            <h4 class="text-center"> Daftar Karyawan</h4>
                            <tr>
                                <th>nama lengkap</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Divisi</th>
                                <th>status</th>
                                <th>status</th>
                            </tr>
                            @foreach ($karyawans as $karyawan)
                                <tr>
                                    <td>{{ $karyawan->nama_lengkap }}</td>
                                    <td>{{ $karyawan->nomor_hp }}</td>
                                    <td>{{ $karyawan->alamat }}</td>
                                    <td>{{ $karyawan->divisi }}</td>
                                    <td>{{ $karyawan->user->leveluser->nama }}</td>
                                    <td>{{ $karyawan->statuspekerjaan->nama }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        <table class="table">

                            <h4 class="text-center"> Task</h4>
                            <tr>
                                <th>nama lengkap</th>
                                <th>judul</th>
                                <th>status</th>
                            </tr>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->user->admin->nama_lengkap }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->statustask->nama }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        <table class="table">

                            <h4 class="text-center"> Absensi karyawan</h4>
                            <tr>
                                <th>nama lengkap</th>
                                <th>status</th>
                                <th>masuk</th>
                                <th>keluar</th>
                            </tr>
                            @foreach ($absensis as $absensi)
                                <tr>
                                    <td>{{ $absensi->user->name }}</td>
                                    <td>{{ $absensi->statusabsensi->nama }}</td>
                                    <td>{{ $absensi->masuk }}</td>
                                    <td>{{ $absensi->keluar }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        <table class="table">

                            <h4 class="text-center"> Financial karyawan</h4>
                            <tr>
                                <th>nama lengkap</th>
                                <th>judul</th>
                                <th>detail</th>
                                <th>pemasukan</th>
                                <th>pengeluaran</th>
                            </tr>
                            @foreach ($financials as $financial)
                                <tr>
                                    <td>{{ $financial->user->name }}</td>
                                    <td>{{ $financial->name }}</td>
                                    <td>{{ $financial->detail }}</td>
                                    <td>{{ $financial->pemasukan }}</td>
                                    <td>{{ $financial->pengeluaran }}</td>
                                </tr>
                            @endforeach
                        </table>

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
