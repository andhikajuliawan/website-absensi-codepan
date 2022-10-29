<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Evidence</th>
            <th>keterangan</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($absensis as $index => $absensi)
            <tr>
                <td> {{ $index + 1 }}</td>
                <td>
                    @if ($absensi->user->level_id == 1)
                        {{ $absensi->user->admin->nama_lengkap }}
                    @else
                        {{ $absensi->user->karyawan->nama_lengkap }}
                    @endif
                </td>
                <td>{{ $absensi->statusabsensi->nama }}</td>
                <td>{{ $absensi->tanggal }}</td>
                <td>
                    @if ($absensi->masuk)
                        {{ $absensi->masuk }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($absensi->keluar)
                        {{ $absensi->keluar }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($absensi->evidence)
                        {{ $absensi->evidence }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($absensi->detail)
                        {{ $absensi->detail }}
                    @else
                        -
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
