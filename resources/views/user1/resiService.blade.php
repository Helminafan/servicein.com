@extends('user.master')
@section('judul')
@endsection
@section('master')
    <div class="bg-white mx-6 p-4 my-8 rounded-lg">
        <div class="text-center mt-10 text-[30px] font-bold">Request Anda Telah Diterima</div>
        <div class="text-center mx-8 mb-10 text-[#555555]">
            <p>Anda telah mengisi form Request/Permintaan dan Memilih Layanan Jasa Service Kami. Anda akan langsung
                dihubungi oleh penyedia jasa kami. mohon menunggu beberapa jam.</p>
        </div>
        <div class="mx-8 border border-slate-200 rounded-xl py-5">
            <div class="mb-10">
                <div class=" text-center text-[20px] font-bold leading-6 text-gray-900">Nomor Pesanan</div>
                <div class=" text-center text-[20px] mt-3 leading-6 text-gray-900">{{$data->resi}}</div>
            </div>
            <div class="">
                <div class=" text-center text-[20px] font-bold leading-6 text-gray-900">Data dan Alamat</div>
                <div class="flex grid grid-cols-3 gap-3 ">
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">Nama Lengkap</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->nama}}</div>
                    </div>
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">Email</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->dataUser->email}}</div>
                    </div>
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">Alamat</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->alamat}}</div>
                    </div>
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">Nomor Telepon</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->dataUser->telp}}</div>
                    </div>
                    <div class="mt-10 flex justify-center">
                        <button class=" rounded-xl p-3 bg-blue-500 text-center text-[18px] mt-3 leading-6 text-white">Lihat Gambar</button>
                    </div>
                    <div class="mt-10">
                       
                    </div>
                </div>
            </div>
            <div class="">
                <div class=" text-center text-[20px] font-bold leading-6 mt-10 text-gray-900">Ringkasan Pesanan</div>
                <div class="flex grid grid-cols-3 gap-3 ">
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">TANGGAL DAN WAKTU
                            PENJEMPUTAN</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->tanggal}}, {{$data->jam}}</div>
                    </div>
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">TIPE PERANGKAT DAN MERK</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->merk}}</div>
                    </div>
                    <div class="mt-10">
                        <div class=" text-center text-[18px] font-bold leading-6 text-gray-900">KELUHAN KERUSAKAN</div>
                        <div class=" text-center text-[18px] mt-3 leading-6 text-gray-900">{{$data->keluhan}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mx-8  my-4 text-[15px] mt-3 leading-6 text-gray-900">
            <p>Jika dalam waktu 1x24 jam tidak ada telepon dari kami, harap melakukan konfirmasi ulang pada Customer Care Halo Servis di nomor
                +6282258620482</p>
        </div>
    </div>
@endsection
