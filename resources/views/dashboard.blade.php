@extends('layouts.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row justify-content-start ">
            <div class="col-xl-3 col-md-4 mb-2 ">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        Hadir
                                    </p>
                                    <h5 class="font-weight-bolder mt-4">{{ $hadirs }}/{{ $jumlahKaryawans }}</h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <img src="../assets/img/Icon-Hadir.png" alt="icon-hadir" style="width: 80%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4  mb-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        IZIN
                                    </p>
                                    <h5 class="font-weight-bolder mt-4">{{ $izins }}/{{ $jumlahKaryawans }}</h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <img src="../assets/img/Icon-Sakit.png" alt="icon-izin" style="width: 80%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-2 col-sm-6 mb-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        IZIN
                                    </p>
                                    <h5 class="font-weight-bolder mt-4">2/30</h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <img src="../assets/img/Icon-Izin.png" alt="icon-izin" style="width: 50px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-3 col-md-4 mb-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        ALFA
                                    </p>
                                    <h5 class="font-weight-bolder mt-4">{{ $alfas }}/{{ $jumlahKaryawans }}</h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <img src="../assets/img/Icon-Alfa.png" alt="icon-izin" style="width: 80%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-md-4 mb-2">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        CUTI
                                    </p>
                                    <h5 class="font-weight-bolder mt-4">0/{{ $jumlahKaryawans }}</h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <img src="../assets/img/Icon-Cuti.png" alt="icon-izin" style="width: 80%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::user()->leveluser->nama == 'admin')
            <div class="row mt-4">
                <div class="col-lg-7 mb-3">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Absensi Hari Ini</h6>
                        </div>
                        <div class="card-body p-3" style="overflow: auto; height: 450px">
                            <ul class="list-group">
                                @foreach ($absensis as $absensi)
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
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
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">
                                                    {{ $absensi->user->name }}
                                                </h6>
                                                <span class="text-xs">
                                                    @if ($absensi->user->level_id === 1)
                                                        {{ $absensi->user->admin->divisi }}
                                                    @else
                                                        {{ $absensi->user->karyawan->divisi }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end" style="width: 20%">
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
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 p-3 bg-transparent">
                            <h6 class="text-xl mb-0">QR Code Absensi</h6>
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('storage/QRcode/QRcode-codepan-studio-surabaya.png') }}" alt="qrcode"
                                style="width:100%; object-fit: cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">Financial</h6>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/US.png" alt="Country flag" />
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Country:
                                                    </p>
                                                    <h6 class="text-sm mb-0">United States</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">2500</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$230,900</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/DE.png" alt="Country flag" />
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Country:
                                                    </p>
                                                    <h6 class="text-sm mb-0">Germany</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">3.900</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$440,000</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">40.22%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/GB.png" alt="Country flag" />
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Country:
                                                    </p>
                                                    <h6 class="text-sm mb-0">Great Britain</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">1.400</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$190,700</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">23.44%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-30">
                                            <div class="d-flex px-2 py-1 align-items-center">
                                                <div>
                                                    <img src="../assets/img/icons/flags/BR.png" alt="Country flag" />
                                                </div>
                                                <div class="ms-4">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Country:
                                                    </p>
                                                    <h6 class="text-sm mb-0">Brasil</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                                <h6 class="text-sm mb-0">562</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Value:</p>
                                                <h6 class="text-sm mb-0">$143,960</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                                <h6 class="text-sm mb-0">32.14%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card card-carousel overflow-hidden h-100 p-0">
                        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner border-radius-lg h-100">
                                <div class="carousel-item h-100 active"
                                    style="
                  background-image: url('../assets/img/carousel-1.jpg');
                  background-size: cover;
                ">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">Get started with Argon</h5>
                                        <p>
                                            There’s nothing I really wanted to do in life that I
                                            wasn’t able to get good at.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="
                  background-image: url('../assets/img/carousel-2.jpg');
                  background-size: cover;
                ">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">
                                            Faster way to create web pages
                                        </h5>
                                        <p>
                                            That’s my skill. I’m not really specifically talented at
                                            anything except for the ability to learn.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item h-100"
                                    style="
                  background-image: url('../assets/img/carousel-3.jpg');
                  background-size: cover;
                ">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <i class="ni ni-trophy text-dark opacity-10"></i>
                                        </div>
                                        <h5 class="text-white mb-1">
                                            Share with us your design tips!
                                        </h5>
                                        <p>
                                            Don’t be afraid to be wrong because you can’t learn
                                            anything from a compliment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next w-5 me-3" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (Auth::user()->leveluser->nama == 'karyawan')
            <div class="col-lg-12 mb-lg-0 mt-4">
                <div class="card z-index-2" style="height: 300px">
                    <div class="card-header pb-0 p-3 bg-transparent m-4">
                        <h5 class="text-xl mb-0">Selamat Datang {{ Auth::user()->karyawan->nama_lengkap }}</h5>
                        <h6 class="mt-3">Dashboard ini diperuntukan khusus untuk para admin, silakan logout untuk keluar
                            dari halaman ini
                            terimakasih.
                        </h6>
                    </div>

                </div>
            </div>
        @endif

    </div>
@endsection
