@extends('teknisi.master')
@section('teknisi')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('teknisi.tarikdana') }}" class="btn btn-info">Tarik Dana</a>
        </div>

        <div class="row">
            <div class="col-xl col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Selamat datang, </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl col-md-6 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Saldoku
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Rp. {{ number_format(Auth::user()->saldo, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Penarikan</h6>
            </div>
            <div class="card-body">
                <div class="" style="width: 100%">
                    <table class="table table-bordered  table-hover table-striped overflow-auto table-responsive-xl"
                        id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jumlah Penarikan</th>
                                <th>Tanggal Penarikan</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $item->jumlah }} </td>
                                    <td>{{ $item->created_at }}</td>
                                    @if ($item->status == 0)
                                        <td><a href="" class="btn btn-warning">Diproses</a></td>
                                    @elseif($item->status == 1)
                                        <td><a href="" class="btn btn-success">Suksess</a></td>
                                    @else
                                        <td><a href="" class="btn btn-danger">Gagal</a></td>
                                    @endif
                                    @if (!$item->status == 0)
                                        <td><a href="" class="btn btn-info">Detail</a></td>
                                    @endif

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
