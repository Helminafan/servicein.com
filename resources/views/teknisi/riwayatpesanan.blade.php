@extends('teknisi.master')
@section('teknisi')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Riwayat Pesanan</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Riwayat</h6>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table table-bordered  table-hover table-striped table-responsive " id="dataTable"
                        width="100%">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Nama Costumer</th>
                                <th>Jenis Barang Rusak</th>
                                <th>Merek barang Rusak</th>
                                <th>Keluhan</th>
                                <th>Tanggal Service</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->service->user->name }}</td>
                                    <td>{{ $item->service->menu->judul }}</td>
                                    <td>{{ $item->service->merk }}</td>
                                    <td>{{ $item->service->keluhan }}</td>
                                    <td>{{ $item->service->created_at }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
