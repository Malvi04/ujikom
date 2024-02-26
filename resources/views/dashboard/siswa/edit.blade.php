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
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Input Siswa Baru</h4>
                                    @foreach ($dataSiswa as $siswa)
                                    <form action="/siswa/update" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$siswa->id}}">
                                        <br><br>
                                        <label for="">Nis</label>
                                        <input type="text" name="nis" value="{{$siswa->nis}}">
                                        <br><br>
                                        <label for="">Nama</label>
                                        <input type="text" name="name" value="{{$siswa->name}}">
                                        <br><br>
                                        <label for="">Kelas</label>
                                        <select name="kelas">
                                            @if ($siswa->kelas_id == '')
                                                <option value="">Pilih Kelas</option>
                                            @endif
                                            @foreach ($dataKelas as $kelas)
                                                @if($ds->kelas_id == $kelas->id)
                                                  <option value="{{$kelas->id}}" selected>
                                                    {{$kelas->kelas}}
                                                  </option>
                                                @else
                                                  <option value="{{$kelas->id}}" selected>
                                                    {{$kelas->kelas}}
                                                  </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <br><br>
                                        <label>Jenis Kelamin</label>
                                        @if ($ds->jenkel == 'P')
                                            <div class="form-check">
                                                <label>
                                                <input type="radio" name="jenkel" value="L"> Laki-laki </label>
                                                <label>
                                                <input type="radio" name="jenkel" value="P" checked> Perempuan </label>
                                        @else
                                                <label>
                                                <input type="radio" name="jenkel" value="L" checked> Laki-laki </label>
                                                <label>
                                                <input type="radio" name="jenkel" value="P"> Perempuan </label>
                                        @endif
                                        <br><br>
                                        <label>Jurusan</label>
                                        <select name="jurusan" class="form-control">
                                        @if ($ds->jurusan_id == '')
                                            <option value="">- Pilih Jurusan -</option>
                                        @endif
                                        @foreach ($dataJurusan as $jurusan)
                                        @if ($ds->jurusan_id == $jurusan->id)
                                            <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama_jurusan }}</option>
                                        @else
                                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                                        @endif
                                        @endforeach
                                        </select>
                                        <br><br>
                                        <button type="submit">Edit</button>
                                    </form>
                                    @endforeach
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



{{-- @foreach ($dataSiswa as $siswa)
<form class="forms-sample" action="/siswa/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $siswa->id }}">
    <div class="form-group">
        <label>NIS</label>
        <input type="text" class="form-control" name="nis" placeholder="NIS"
            value="{{ $siswa->nis }}">
        @error('nis')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="name"
            placeholder="Nama Lengkap" value="{{ $siswa->name }}">
        @error('name')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <select name="kelas" class="form-control">
            @if ($siswa->kelas_id == '')
                <option value="">- Pilih Walas -</option>
            @endif
            @foreach ($dataKelas as $kelas)
                @if ($siswa->kelas_id == $kelas->id)
                    <option value="{{ $kelas->id }}" selected>
                        {{ $kelas->kelas }}</option>
                @else
                    <option value="{{ $kelas->id }}">
                        {{ $kelas->kelas }}
                    </option>
                @endif
            @endforeach
        </select>
        @error('kelas')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>

        @if ($siswa->jenkel == 'P')
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenkel"
                        value="L"> Laki-laki </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenkel"
                        value="P" checked> Perempuan </label>
            </div>
        @else
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenkel"
                        value="L" checked> Laki-laki </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jenkel"
                        value="P"> Perempuan </label>
            </div>
        @endif

    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <select name="jurusan" class="form-control">
            @if ($siswa->jurusan_id == '')
                <option value="">- Pilih Jurusan -</option>
            @endif
            @foreach ($dataJurusan as $jurusan)
                @if ($siswa->jurusan_id == $jurusan->id)
                    <option value="{{ $jurusan->id }}" selected>
                        {{ $jurusan->nama_jurusan }}</option>
                @else
                    <option value="{{ $jurusan->id }}">
                        {{ $jurusan->nama_jurusan }}
                    </option>
                @endif
            @endforeach
        </select>
        @error('jurusan')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
</form>
@endforeach --}}