@extends('teknisi.master')

@section('teknisi')
    <!-- Konten Halaman Tambah Barang -->
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pembyaran</h1>
     

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Tambah Transaksi</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{route('teknisi.tambahPembayaran',$data->id)}}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="namaBarang" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" id="namaBarang" />
                    </div>
                    
                    <div class="col-md-12">
                        <label for="fotobarang" class="form-label">Deskripsi Kerusakan</label>
                        <textarea  name="detail_transaksi" class="form-control-file" id="fotobarang" ></textarea>
                    </div>
                    
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-warning">Input</button>
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
                    namaBarang: {
                        required: true,
                    },
                    merek: {
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
