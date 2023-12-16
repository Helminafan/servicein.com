@extends('admin.master')

@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Service</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                                <th>Nama Teknisi</th>
                                <th>Keluhan</th>
                                <th>Detail masalah</th>
                                <th>status</th>
                                <th>Hubungkan Teknisi</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->resi }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->menu->judul }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>
                                        @if ($item->teknisi)
                                            {{ $item->teknisi->user_teknisi->name }}
                                        @endif
                                    </td>
                                    <td>{{ $item->keluhan }}</td>
                                    <td>{{ $item->masalah }}</td>
                                    <td>
                                        @if ($item->status)
                                            @if ($item->status->status == 1)
                                                <a href=""
                                                    class="btn btn-warning">Sedang perbaiki</a>
                                            @elseif ($item->status->status == 2)
                                                <a href="" class="btn btn-success">Selesai</a>
                                            @else
                                                <a href="" class="btn btn-info">Sedang Penjemputan</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status_teknisi == 1)
                                            <a href="" class="btn btn-warning">Menunggu konfirmasi</a>
                                        @elseif ($item->status_teknisi == 2)
                                            <a href="" class="btn btn-success">Terhubung</a>
                                        @else
                                            <a href="{{ route('admin.aturteknisi', $item->id) }}"
                                                class="btn btn-danger">Hubungkan</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status)
                                            @if ($item->status->status_pembayaran == 1)
                                                <a  href="{{ route('admin.bukti_pembayaran', $item->status->id) }}"
                                                    class="btn btn-warning">Konfirmasi Pembayaran</a>
                                            @elseif ($item->status->status_pembayaran == 2)
                                                <a href="" class="btn btn-success">pembayaran Selesai</a>
                                            @else
                                                <a href="" class="btn btn-danger">Belum Bayar</a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <a data-confirm-delete="true" class="btn btn-sm btn-danger" href="">Hapus</a>
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
