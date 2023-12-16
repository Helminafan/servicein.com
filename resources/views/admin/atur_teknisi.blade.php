@extends('admin.master')
@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pengembalian Barang</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables,</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class=" col m-0 font-weight-bold text-primary">Pengembalian Barang Rentals</h6>
            </div>
            <div class="card-body">
                <form id="validate" method="POST" action="{{route('admin.aturteknisistore')}}" class="row g-3">
                    @csrf
                    <div class="col-md-6" hidden>
                        <label for="denda" class="form-label">id_service</label>
                        <input type="text" name="service_id" value="{{ $data->id }}" class="form-control"
                            id="denda" />
                    </div>
                    <div class="col-md-6">
                        <label for="denda_kerusakan" class="form-label">Teknisi</label>
                        <select name="teknisi_id" id="" class="form-control">
                            <option value="">Pilih Teknisi</option>
                            @foreach ($teknisiList as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-warning">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
