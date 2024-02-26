{{-- @extends('template.index')
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
                                    <h4 class="card-title">Input Absensi</h4>
                                    

                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pilih Kelas
                                        </button>
                                        <ul class="dropdown-menu">
                                            @foreach ($kelas as $kel)
                                                <li><a class="dropdown-item" href="/absensi/data/search/{{$kel->id}}">{{$kel->kelas}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>


                                    <div class="table-responsive">
                                        <table class="table text-white">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Kelas</th>
                                                    <th>Jurusan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                    <tr>
                                                        <td colspan="5" class="text-center">Data Notfound</td>
                                                    </tr>
                                            </tbody>
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
@endsection --}}



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
                                <h4 class="card-title">Pilih Jurusan</h4>
                                <div class="container-fluid mt-8">
                                    <div class="row">
                                        @foreach ($jurusanData as $jurusan)
                                        <div class="col-6">
                                            <a href="/data-kelas/{{$jurusan->id}}">
                                              <button class="w-100" style="background-color : #091527">
                                                <div class="card" style="background-color : #091527">
                                                  <div class="card-body p-5">
                                                    <h5 class="card-title fs-3 text-light text-center m-1">{{$jurusan->nama_jurusan}}</h5>
                                                  </div>
                                                </div>
                                              </button>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
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
