@extends('admin.master')

@section('admin')
    <!-- Konten Halaman Tambah Barang -->
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Menu</h1>
       

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Tambah Menu</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{ route('menu.store') }}" class="row g-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="namaBarang" class="form-label">Judul Menu</label>
                        <input type="text" name="judul" class="form-control" id="namaBarang" />
                    </div>
                    
                    <div class="col-md-6">
                        <label for="fotobarang" class="form-label">Foto Menu</label>
                        <input type="file" name="gambar" class="form-control-file" id="fotobarang" />
                    </div>
                    
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-warning">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#validate").validate({
                rules: {
                    judul: {
                        required: true,
                    },
                    gambar: {
                        required: true,
                    },
                    jumlahBarang: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    },
                    hargasewa: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    },
                    hargasewa: {
                        required: true,
                      
                    },
                    deskripsiBarang: {
                        required: true,
                      
                    },
                },
                // messages: {
                //     jam_pengembalian: {
                //         greaterThanStartTime: "Waktu selesai harus setelah waktu mulai.",
                //     },
                // },
            });
        });
    </script>
@endpush
