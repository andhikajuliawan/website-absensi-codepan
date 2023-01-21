<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Keterangan</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($financials as $index => $financial)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $financial->user->name }}</td>
                <td>{{ $financial->tanggal }}</td>
                <td>{{ $financial->name }}</td>
                <td>{{ $financial->detail }}</td>
                <td>
                    @if ($financial->pemasukan > 0)
                        {{ $financial->pemasukan }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if ($financial->pengeluaran > 0)
                        {{ $financial->pengeluaran }}
                    @else
                        -
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
