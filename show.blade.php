{{-- Location: resources > views > laporan --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
    @include('link')
</head>

<body class="hold-transition sidebar-mini">
    @include('dashhead')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item fixed-bottom">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 d-flex justify-content-center align-items-center">
                        <div class="col-sm-6">
                            <h1>Data Laporan Pengaduan</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content px-5">
                <!-- Default box -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 shadow px-5 py-5">
                            <form method="post" action="{{ route('laporan.updateStatus', $laporan->id) }}">
                                @csrf
                                @method('patch')
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="select-form">
                                    <option value="pending" @if ($laporan->status == 'pending') selected @endif>Pending</option>
                                    <option value="progress" @if ($laporan->status == 'progress') selected @endif>On-Progress</option>
                                    <option value="done" @if ($laporan->status == 'done') selected @endif>Done</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-primary mt-3">Update Status</button>
                            </form>
                            <h6 class="my-3">Kategori Laporan : {{ $laporan->kategori }}</h6>
                            <h6 class="my-4">Nama : {{ $laporan->name }}</h6>
                            <h6 class="my-4">Alamat : {{ $laporan->alamat }}</h6>
                            <h6 class="my-4">Isi Aspirasi : {{ $laporan->aspirasi }}</h6>
                            <h6 class="my-4">Keterangan : {{ $laporan->keterangan }}</h6>
                            <h6 class="my-4">Gambar Kejadian : <br><img src="{{ url($laporan->gambar_kejadian) }}"
                                    alt="gambar" width="300" class="my-4"></h6>

                            <a href="/dashboard"><button class="btn btn-outline-info" style="float: right;">Kembali
                                    <b>-></b></button></a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2024. Ramadhan Ganteng</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>
{{-- ------------------------------------------------------------------------------------- --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</html>


{{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Laporan</li>
                        </ol>
                    </div> --}}
