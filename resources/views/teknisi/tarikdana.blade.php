@extends('teknisi.master')

@section('teknisi')
    <!-- Konten Halaman Tambah Barang -->
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tarik Dana</h1>
      

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Tarik Dana</h6>
            </div>
            <div class="card-body">
                <form id="validasi" method="POST" action="{{route('teknisi.tarikdanastore')}}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="fotobarang" class="form-label">Nama Pengguna Bank</label>
                        <input type="text" name="nama_pengguna" class="form-control" id="fotobarang" placeholder="masukan nama"/>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlah" class="form-label">Jumlah Penarikan</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukan Angka etc: 20000"/>
                    </div>
                    <div class="col-md-6">
                        <label for="namaBarang" class="form-label">Nama Bank</label>
                        <select name="bank" class="form-control">
                            <option value="">Pilih Nama Bank</option>
                            <option value="BRI">BRI</option>
                            <option value="MANDIRI">MANDIRI</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="rekening" class="form-label">No. Rekening</label>
                        <input type="number" name="rekening" class="form-control" id="rekening" placeholder="Masukan Angka etc:515281818182"/>
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
            $("#validasi").validate({
                rules: {
                    nama_pengguna: {
                        required: true,
                    },
                    bank: {
                        required: true,
                    },
                    jumlah: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    },
                    rekening: {
                        required: true,
                        number: true, // Menambahkan aturan kustom
                    }
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
