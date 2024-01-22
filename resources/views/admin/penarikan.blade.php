@extends('admin.master')

@section('admin')
    <div class="container-fluid" style="margin-top: 50px">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Penarikan</h1>
       

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Penarikan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Akun Bank</th>
                                <th>Nama User</th>
                                <th>No HP</th>
                                <th>No Rekening</th>
                                <th>Bank</th>
                                <th>Bukti</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->nama_pengguna }}</td>
                                    <td>{{ $item->akun->name }}</td>
                                    <td>{{ $item->akun->telp }}</td>
                                    <td>{{ $item->rekening }}</td>
                                    <td>{{ $item->bank }}</td>
                                    <td><a href="{{route('admin.buktipenarikan',$item->id)}}" class="btn btn-primary">Kirim</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
