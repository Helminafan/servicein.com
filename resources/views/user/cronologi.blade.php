@extends('user.master')
@section('judul')
@endsection
@section('master')
    <div class="text-center mt-10 text-[30px] font-bold">Cronologi</div>
    <div class="text-center mb-10 text-[#555555]">
        <p>Ceritakan masalah anda secara lengkap, dan jelaskan kebutuhan anda kepada kami.</p>
    </div>
    <form class="mx-8" action="">
        <label for="elektronik" class=" text-sm font-medium leading-6 text-gray-900">Merk Alat Elektronik Anda:</label>
          <div class="mt-2 mb-7">
            <select id="elektronik" name=""  class=" w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 ">
              <option>Merk</option>
              <option>Samsung</option>
              <option>Xiomi</option>
            </select>
          </div>
          <label for="keluhan" class=" block text-sm font-medium leading-6 text-gray-900">Keluhan atau Masalah pada Elektronik Anda:</label>
          <div class="mt-2 mb-7 ">
            <input type="text" name="" id="keluhan"  class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600" placeholder="Masukkan Keluhan Anda ...">
          </div>

          <label for="foto" class="block text-sm font-medium leading-6 text-gray-900">Foto (Jika Ada):</label>
          <div class="mt-2 mb-7 ">
            <input type="file" name="" id="foto"  class="w-full block rounded-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus-within:ring-indigo-600" placeholder="Masukkan Keluhan Anda ...">
          </div>

          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Ceritakan Masalah Kerusakan Anda Secara Detail:</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <div class="mt-8 mb-10">
            <button type="submit" class="flex w-full justify-center rounded-md bg-[#1088E8] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#25669b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Selanjutnya</button>
          </div>
    </form>
@endsection
