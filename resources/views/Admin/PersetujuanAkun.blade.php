@extends("layouts.admin")

@section("content")
                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div id="content">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Approval Akun</h1>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h1 class="h5 font-weight-bold text-success text-uppercase mb-1">
                                                Akun Diapprove</h1>
                                            <p class="h4 mb-0 font-weight-bold text-gray-800">{{ $App }}</p>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-user-check fa-2xl text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h1 class="h5 font-weight-bold text-danger text-uppercase mb-1">
                                                Akun Belum Diapprove</h1>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $notApp }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-user-xmark fa-2xl text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                                                Total Seluruh Akun penjual</div>
                                            <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $total }}</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-users fa-2xl text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
        
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                {{-- <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                                    <form class="d-none d-sm-inline-block my-2 my-md-0 mw-100 w-50 ">
                                        <div class="input-group ">
                                            <input type="text" class="form-control bg-white small shadow" placeholder="Cari Nama Toko"
                                                aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-sort fa-xl"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Sort :</div>
                                            <a class="dropdown-item" href="#">Ascending</a>
                                            <a class="dropdown-item" href="#">Descending</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        @if (!$notApp)
                                            <h1 class="ml-3">Semua Akun Sudah Terapprove</h1>
                                        @else
                                        
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Toko</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Foto KTP</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bodyT-PA" class="">
                                                @foreach ($merchants as $merchant)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $merchant->name }}</td>
                                                    <td>{{ $merchant->email }}</td>
                                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Lihat KTP
                                                      </button>
                                                    </td>
                                                      <td>
                                                        <form action="/Admin/{{ $merchant->id }}" method="post" class="d-inline">
                                                            @method('patch')
                                                            @csrf
                                                            <button type="submit" class="rounded-pill bg-red px-3 py-1 text-white border-0"
                                                                onclick="return confirm('Verifikasi akun {{ $merchant->name }}?')">
                                                                <i class="fa-solid fa-user-check fa-lg text-success"></i>
                                                            </button>
                                                            </form>
                                                          {{-- <a class="btn"></a> --}}
                                                          {{-- <a class="btn"><i class="fa-solid fa-user-xmark fa-lg text-danger"></i></a> --}}
                                                        </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Foto KTP</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <img src="{{ asset('storage/'. $merchant->foto_ktp) }}" class="card-img-top" alt="..." width="398" height="298">
                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- End of Main Content -->
            <!-- Modal -->
            
            
        <!-- End of Content Wrapper -->
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>    
@endsection

@section('scripts')

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>
@endsection
