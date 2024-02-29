<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Tanggal</th>
            <th>Kehadiran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataSiswa as $siswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>
                    @if ($siswa->jenkel == 'P')
                        {{ 'Perempuan' }}
                    @else
                        {{ 'Laki-laki' }}
                    @endif
                </td>
                <td>{{ $siswa->nama_jurusan }}</td>
                <td>{{ $siswa->created_at }}</td>
                <td>
                    @if ($siswa->status_kehadiran == 1)
                        <span>HADIR</span>
                    @elseif($siswa->status_kehadiran == 2)
                        <span>Izin</span>
                    @else
                        <span>Alfa</span>
                    @endif
                </td>
            </tr>
    </tbody>
    @endforeach
</table>