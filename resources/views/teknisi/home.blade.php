@extends('teknisi.master')
@section('teknisi')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>


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
                                <th>No Resi</th>
                                <th>Nama Costumer</th>
                                <th>Jenis Barang Rusak</th>
                                <th>Merek barang Rusak</th>
                                <th>Keluhan</th>
                                <th>Detail masalah</th>
                                <th>status</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->service->resi }}</td>
                                    <td>{{ $item->service->user->name }}</td>
                                    <td>{{ $item->service->menu->judul }}</td>
                                    <td>{{ $item->service->merk }}</td>
                                    <td>{{ $item->service->keluhan }}</td>
                                    <td>{{ $item->service->masalah }}</td>
                                    <td>
                                        @if ($item->service->status)
                                            @if ($item->service->status->status == 1)
                                                <a href="{{ route('teknisi.editPembayaran', $item->service->status->id) }}"
                                                    class="btn btn-warning">Sedang perbaiki</a>
                                            @elseif ($item->service->status->status == 2)
                                                <a href="" class="btn btn-success">Selesai</a>
                                            @else
                                                <a href="" class="btn btn-info">Sedang Penjemputan</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->service->status)
                                            @if ($item->service->status->status_pembayaran == 1)
                                                <a href=""
                                                    class="btn btn-warning">belum Dikonfirmasi</a>
                                            @elseif ($item->service->status->status_pembayaran == 2)
                                                <a href="" class="btn btn-success">Pembayaran Selesai</a>
                                            @else
                                                <a href="" class="btn btn-danger">Belum Bayaran</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->service->status_teknisi == 2)
                                            <a data-confirm-delete="true" class="btn btn-sm btn-success"
                                                href="">Diterima</a>
                                        @else
                                            <a class="btn btn-sm btn-success"
                                               id="konfirmasi" href="{{ route('teknisi.terima', $item->service_id) }}">Terima</a>
                                            <a data-confirm-delete="true" class="btn btn-sm btn-danger"
                                                href="">Tolak</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
