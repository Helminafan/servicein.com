@extends('user.master')
@section('judul')
@endsection
@section('master')
    <div class=" mx-8 text-gray-600 text-[40px] mt-4">
        Resi Service
    </div>
    <div class="shadow-lg mt-3 rounded-lg overflow-hidden mx-4 md:mx-10">
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Nomor Pesanan</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Merk</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Keluhan Kerusakan</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($data as $item)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">{{$item->resi}}</td>
                        <td class="py-4 px-6 border-b border-gray-200 truncate">{{$item->merk}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{$item->keluhan}}</td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <a href="{{route('cekResi',$item->id)}}"><button class="bg-blue-700 text-white py-2 px-5 rounded-xl text-xs">Detail</button></a>
                        </td>
                    </tr>
                @endforeach

                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
@endsection
