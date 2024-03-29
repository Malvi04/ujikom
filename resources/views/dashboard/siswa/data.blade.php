@extends('template.index')
@section('gurutambah')
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('layout.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('layout.nav')
            <!-- partial -->


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h4 class="card-title text-dark">Data Siswa</h4>
                                    <div class="table-responsive">
                                        <table class="table text-dark">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NIS</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Kelas</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jurusan</th>
                                                    <th>Action</th>
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
                                                        <td>
                                                            <a href="/siswa/edit/{{ $siswa->id }}"
                                                                class="badge badge-warning">Edit</a>
                                                            <a href="/siswa/hapus/{{ $siswa->id }}"
                                                                class="badge badge-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layout.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection



{{-- <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Action</th>
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
                    {{'Perempuan'}}
                @else
                    {{'Laki-Laki'}}
                @endif
            </td>
            <td>{{ $siswa->nama_jurusan }}</td>
            <td>
                <a href="/siswa/edit/{{ $siswa->id }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
