@extends('admin.master')

@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Teknisi</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
            information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>ijazah</th>
                                <th>Sertifikat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td><a href="{{ route('admin.view_ijazah', $item->id) }}" class="btn btn-success">Lihat
                                            PDF</a></td>
                                    <td><a href="{{ route('admin.view_sertifikat', $item->id) }}"
                                            class="btn btn-success">Lihat PDF</a></td>
                                    @if ($item->konfirmasi == 1)
                                        <td><a href="" class="btn btn-success">Dikonfirmasi</a></td>
                                    @else
                                        <td><a id="konfirmasi" href="{{route('admin.update_konfirmasi', $item->id)}}" class="btn btn-danger">Belum Dikonfirmasi</a></td>
                                    @endif
                                    <td><a href="" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
