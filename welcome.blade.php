{{-- Terminal: php artisan migrate --}}
{{-- Location: resources > views --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelayanan Pengaduan Masyarakat</title>
    <link rel="icon" type="image/x-icon"
        href="https://st2.depositphotos.com/1768926/10264/v/950/depositphotos_102644096-stock-illustration-community-care-logo-template.jpg">
</head>
@include('link')

<body>
    @include('header')
    {{-- HERO MASTER --}}
    <section id="master-hero">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="row flex-md-row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-sm-1">
                <div class="col px-5 order-md-2 px-2">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExY3hob3o1Y2Z2c2I0Mm96ajBhamlnc2o3cTlwZXljNmJnY2Y0bzI3cyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/qVgTbY96Zj3eUjeDDX/giphy.gif" alt="master-hero"
                        class="img-fluid mb-3">
                </div>
                <div class="col d-flex justify-content-center align-items-center px-4 order-md-1 mt-3">
                    <div>
                        <h5>Selamat Datang di,</h5>
                        <h1 class="display-6" style="font-family: cambria; font-weight:800;">Pelayanan Pengaduan
                            Masyarakat</h1>
                        <p style="font-family:cambria;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime
                            architecto repellat tenetur
                            optio minima error aspernatur consequatur perferendis nemo libero?</p>
                        <a href="#formulir-pengaduan"><button class="btn btn-outline-info px-5 py-2 border-2">Lapor
                                !</button></a>
                    </div>
                </div>
            </div>
        </div>
        <p id="formulir-pengaduan" class="my-5 mb-5" style="overflow: hidden;">.</p>
    </section>
    {{-- HERO MASTER --}}

    {{-- FORM --}}
    <section id="formulir-pengaduan">
        <div class="container px-4" style="height: 100vh;">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-sm-6 shadow rounded px-5" style="border: 1px solid lightgreen;">
                    <div class="d-flex justify-content-center align-items-center">
                        <h2 class="mt-4 mb-3">Formulir Pengaduan</h2>
                    </div>
                    <form id="formulir">
                        @csrf
                        <input type="hidden" value="pending" class="hidden" id="status" name="status">
                        <div class="input-control my-1">
                            <label for="kategori" class="my-2">Kategori Aspirasi : </label>
                            {{-- <input type="text" class="form-control" name="kategori" id="kategori"> --}}
                            <select name="kategori" id="kategori" class="form-select">
                                <option value="Kebersihan">Kebersihan</option>
                                <option value="Keamanan">Keamanan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="input-control my-1">
                            <label for="name" class="my-2">Nama Lengkap : </label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="input-control my-1">
                            <label for="alamat" class="my-2">Alamat Lengkap : </label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="input-control my-1">
                            <label for="aspirasi" class="my-2">Aspirasi Anda : </label>
                            <input type="text" class="form-control" id="aspirasi" name="aspirasi">
                        </div>
                        <div class="input-control my-1">
                            <label for="keterangan" class="my-2">Keterangan Detail : </label>
                            <textarea name="keterangan" id="keterangan" cols="20" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="input-control my-1">
                            <label for="gambar_kejadian" class="my-2">Photo Kejadian : </label>
                            <input type="file" class="form-control" id="gambar_kejadian" name="gambar_kejadian">
                        </div>
                    </form>
                    <button class="btn btn-info my-4 px-4 py-2 text-white" id="submitBtn"
                        style="float: right !important;">Submit</button>
                </div>
            </div>
        </div>
    </section>
    {{-- FORM --}}

    {{-- Table History --}}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-10 col-sm-12">
                <h1 class="my-4" style="text-align: center;">Histori Aspirasi</h1>
                <div class="container">
                    <div class="row">
                    </div>
                </div>
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead class="border border-dark bg-light">
                            <tr style="text-align: center;">
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aspirasi</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($laporan as $key=>$data)
                                <tr style="text-align: center;">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $data->kategori }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->aspirasi }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>
                                        <img src="{{ asset("storage/gambar_kejadian/bRmODBdMtTZdY2s5qhx7YjM17itQeEot67uwOikB.jpg") }}" alt="" width="50">
                                   </td>
                                    <td>
                                        <b>
                                            <span
                                                class="badge rounded-pill py-2 px-4
                                                        @if ($data->status == 'pending') bg-danger
                                                        @elseif($data->status == 'progress') bg-warning
                                                        @elseif($data->status == 'done') bg-success @endif">
                                                {{ $data->status }}
                                            </span>
                                        </b>
                                    </td>

                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Table History --}}

</body>
@include('script')

<script>
    $(document).ready(function() {
        // Fungsi yang akan dipanggil ketika tombol "Submit" ditekan
        $("#submitBtn").click(function() {
            // Mendapatkan data formulir
            var formData = new FormData($("#formulir")[0]);
            // Mengirim data ke backend menggunakan Ajax
            $.ajax({
                type: "POST", // Metode HTTP
                url: "/submit-form", // Gantilah dengan URL backend Anda
                data: formData, // Data formulir
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: "Data Berhasil Terkirim !",
                        icon: "success",
                        timer: 1500,
                        didClose: () => {
                            setTimeout(function() {
                                    location.reload();
                                },
                                1000
                            ); // Ubah angka 1000 menjadi jumlah milidetik yang diinginkan
                        }
                    });
                },
                error: function(error) {
                    // Fungsi yang akan dijalankan jika permintaan gagal
                    console.log(error);
                    // Lakukan sesuatu dengan pesan kesalahan
                    alert("Terjadi kesalahan saat mengirim formulir.");
                }
            });
        });
    });
</script>

</html>
