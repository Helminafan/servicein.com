@extends('admin.master')

@section('admin')
    <!-- Konten Halaman Tambah Barang -->
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bukti</h1>


        <!-- DataTales Example -->
        @if ($data->fotobukti == null)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class=" col m-0 font-weight-bold text-primary">Kirim Bukti</h6>
                </div>
                <div class="card-body">
                    <form id="validate" method="POST" action="{{ route('admin.buktipenarikanstore', $data->id) }}"
                        class="row g-3" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <label for="fotobarang" class="form-label">Foto Bukti</label>
                            <input type="file" name="fotobukti" class="form-control-file" id="fotobarang" />
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-warning">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class=" col m-0 font-weight-bold text-primary">Kirim Bukti</h6>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <center>
                                <a href="{{ asset('storage/' . $data->fotobukti) }}" download="{{ $data->fotobukti }}">
                                    <img style="width: 500px; border: 1px solid"
                                        src="{{ asset('storage/' . $data->fotobukti) }}" alt="">
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        @endif

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
                    fotobukti: {
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
