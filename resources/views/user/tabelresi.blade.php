@extends('user.master')
@section('master')
    <div class=" mx-8 text-gray-600 text-[40px] mt-4">
        Resi Service
    </div>
    <div class="shadow-lg mt-3 rounded-lg overflow-x-auto mx-4 md:mx-10">
        <table class="table-auto w-full ">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Nomor Pesanan</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Merk</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Keluhan Kerusakan</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Detail</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status Pembayaran</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($data as $item)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $item->resi }}</td>
                        <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $item->merk }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $item->keluhan }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <a href="{{ route('cekResi', $item->id) }}"><button
                                    class="bg-blue-700 text-white py-2 px-5 rounded-xl text-xs">Detail</button></a>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            @if ($item->status)
                                @if ($item->status->status_pembayaran === 0)
                                    <a href="{{ route('user.pembayaran', $item->status->id) }}"><button
                                            class="bg-red-600 text-white py-2 px-5 rounded-xl text-xs">Cek
                                            Pembayaran</button></a>
                                @elseif($item->status->status_pembayaran == 1)
                                    <a href=""><button
                                            class="bg-amber-500 text-white py-2 px-5 rounded-xl text-xs">Tunggu
                                            Konfirmasi</button></a>
                                @elseif($item->status->status_pembayaran == 2)
                                    <a href=""><button
                                            class="bg-green-600 text-white py-2 px-5 rounded-xl text-xs">Pembayaran
                                            Selesai</button></a>
                                @endif
                            @endif
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            @if ($item->status)
                                @if ($item->status->status == 0)
                                    <a id="konfirmasi" href="{{ route('user.konfirmasi_penjemputan', $item->status->id) }}"><button
                                            class="bg-red-600 text-white py-2 px-5 rounded-xl text-xs">Konfirmasi
                                            Penjemputan</button></a>
                                @elseif($item->status->status == 1)
                                    <a href=""><button
                                            class="bg-amber-500 text-white py-2 px-5 rounded-xl text-xs">Sedang
                                            perbaikan</button></a>
                                @else
                                    <a href=""><button
                                            class="bg-green-600 text-white py-2 px-5 rounded-xl text-xs">Perbaikan
                                            Selesai</button></a>
                                @endif
                            @endif

                        </td>
                    </tr>
                @endforeach

                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
@endsection
