@extends('user.master')
@section('judul')
@endsection
@section('master')
    <form action="{{route('promise.store')}}" method="POST" enctype="multipart/form-data" class="employee-form mx-8">
        @csrf
        <div class="form-section">
            <div class="text-center mt-10 text-[30px] font-bold">Cronologi</div>
            <div class="text-center mb-10 text-[#555555]">
                <p>Ceritakan masalah anda secara lengkap, dan jelaskan kebutuhan anda kepada kami.</p>
            </div>

            <label for="elektronik" class=" text-sm font-medium leading-6 text-gray-900">Merk Alat Elektronik Anda:</label>
            <div class="mt-2 mb-7">
                <input type="text" required name="merk" id="keluhan"
                    class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    placeholder="masukan merek alat elktronik anda">
            </div>
            <label for="keluhan" class=" block text-sm font-medium leading-6 text-gray-900">Keluhan atau Masalah pada
                Elektronik Anda:</label>
            <div class="mt-2 mb-7 ">
                <input type="text" required name="keluhan" id="keluhan"
                    class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    placeholder="Kerusakan Batrei, lcd blank, etc">
                <input type="text"  name="user_id" id="keluhan"
                    class="w-full hidden block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    placeholder="Kerusakan Batrei, lcd blank, etc" value="{{Auth::user()->id}}" >
            </div>

            <label for="foto" class="block text-sm font-medium leading-6 text-gray-900">Foto (Jika Ada):</label>
            <div class="mt-2 mb-7 ">
                <input type="file"  name="foto" id="foto"
                    class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    placeholder="Masukkan Keluhan Anda ...">
            </div>

            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Ceritakan Masalah Kerusakan Anda
                Secara Detail:</label>
            <div class="mt-2">
                <textarea id="about" required name="masalah" rows="3"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>
        <div class="form-section">
            <div class="text-center mt-10 text-[30px] font-bold">Make Promise</div>
            <div class="text-center mb-10 text-[#555555]">
                <p>ika di Lakukan Sistem Penjemputan Tentukan lokasi anda
                    dengan akurat agar teknisi kita dapat menjangkau anda.</p>
            </div>


            <label for="keluhan" class="mt-4 text-center block text-sm font-medium leading-6 text-gray-900">Tentukan
                Tanggal
                dan
                Jam:</label>
            <div class="flex justify-center">

                <div class="div mr-5">

                    <div class="mt-2 mb-7 ">
                        <input type="time" required name="jam" id="keluhan"
                            class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                            placeholder="Masukkan Keluhan Anda ...">
                    </div>
                </div>
                <div class="div ml-5">

                    <div class="mt-2 mb-7 ">
                        <input type="date" required name="tanggal" id="keluhan"
                            class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                            placeholder="Masukkan Keluhan Anda ...">
                    </div>
                </div>
            </div>
            <p class="text-center text-sm font-medium leading-6 text-gray-900">data Alamat</p>
            <div class="mt-2 mb-7 ">
                <input type="text" required name="nama" id="keluhan"
                    class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    placeholder="Nama Lengkap">
            </div>
            <div class="mt-2 mb-7 " hidden>
                <input type="text" required name="menu_id" id="keluhan"
                    class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                    value="{{$data->id}}">
            </div>
            {{-- <div class="grid grid-cols-2 gap-7">
                <div class="">
                    <div class="mt-2 mb-7 ">
                        <input type="text" required name="" id="keluhan"
                            class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                            placeholder="Alamat Email">
                    </div>
                </div>
                <div class="">
                    <div class="mt-2 mb-7 ">
                        <input type="text" required name="" id="keluhan"
                            class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600"
                            placeholder="Nomor Telpon">
                    </div>
                </div>
            </div> --}}
            <div class="mt-2">
                <textarea id="about" required name="alamat" rows="3" placeholder="Masukan alamat"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          


        </div>

        <div class="form-navigation">
            <div class="mt-8 mb-10">
                <button type="button"
                    class="flex next  w-full justify-center rounded-md bg-[#1088E8] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#25669b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Selanjutnya</button>
            </div>
            <div class="mt-8 mb-10">
                <button type="button"
                    class="flex previous w-full justify-center rounded-md bg-[#1088E8] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#25669b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sebelumnya</button>
            </div>
            <div class="mt-8 mb-10">
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-[#42e810] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#5ca845] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
        </div>
    </form>
@endsection
@push('js')
    {{-- <script>
        const map = L.map("map").setView([51.505, -0.09], 13);

        const tiles = L.tileLayer(
            "https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }
        ).addTo(map);
    </script> --}}
    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {

                $sections.removeClass('current').eq(index).addClass('current');

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [Type=submit]').toggle(atTheEnd);

            }

            function curIndex() {

                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.employee-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });

            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });


            navigateTo(0);



        });
    </script>
@endpush
