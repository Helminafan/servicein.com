@extends('user.master')
@section('master')
<div class="flex my-7 mx-8">
    <div class="w-full mr-4">
        <div class="relative  focus-within:text-blue-500">
            <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input
                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="Search for projects" aria-label="Search" />
        </div>
    </div>
    <div class="relatif">
        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
            @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
            aria-haspopup="true">
            <img class="object-cover w-10 h-10 rounded-full"
                src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                alt="" aria-hidden="true" />
        </button>
        <template x-if="isProfileMenuOpen">
            <ul x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                aria-label="submenu">
                <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                            </path>
                        </svg>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#">
                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </template>
    </div>
</div>

<div class="flex mx-8 justify-around items-center bg-white">
    <img src="{{ asset('user/assets/img/usinessman.png') }}" alt="">
    <h1 class="font-extrabold text-[40px]"> Cari Jasa Service </h1>
    <img src="{{ asset('user/assets/img/question.png') }}" alt="">
</div>
<div class="grid gap-x-14 grid-cols-4 my-7 mx-8">
    <div class="item bg-white rounded-lg  w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/iphone.png') }}" alt="">
            <p>Android</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg  w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/iphone.png') }}" alt="">
            <p>Iphone</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg  w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/ipad.png') }}" alt="">
            <p>Ipad</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg  w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/laptop.png') }}" alt="">
            <p>Laptop</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg mt-10 w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/laptop.png') }}" alt="">
            <p>Macbook</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg mt-10 w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/printer.png') }}" alt="">
            <p>Printer</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg mt-10 w-52 p-4">
        <center>
            <img src="{{ asset('user/assets/img/computer.png') }}" alt="">
            <p>Komputer</p>
        </center>
    </div>
    <div class="item bg-white rounded-lg mt-10 w-52 p-4">
        <center>
            <img class="my-7" src="{{ asset('user/assets/img/tv.png') }}" alt="">
            <p>Televisi</p>
        </center>
    </div>
</div>
<div class="flex my-8 mx-8 justify-between">
    <div class="flex">
        <h1 class="text-[30px] font-bold">Periksa Gratis Sekarang</h1>
        <img class="" src="{{ asset('user/assets/img/rate.png') }}" alt="">
    </div>
    <h1 class="text-[30px] font-medium">Selengkapnya</h1>
</div>
<div class=" my-10 grid gap-x-9 grid-cols-3 mx-8">
    <div class="item bg-white rounded-lg p-6">
        <div class="grid grid-cols-2 ">
            <img src="{{ asset('user/assets/img/error.png') }}" alt="">
            <p class="self-end font-bold">cek penyebab laptop lemot !</p>
        </div>
    </div>
    <div class="item bg-white rounded-lg p-6 self-center">
        <div class="grid grid-cols-2 py-10">
            <img src="{{ asset('user/assets/img/broken.png') }}" alt="">
            <p class="self-center font-bold">cek layar tv yang buram</p>
        </div>
    </div>
    <div class="item bg-white rounded-lg p-6">
        <div class="grid grid-cols-2 ">
            <img src="{{ asset('user/assets/img/robot.png') }}" alt="">
            <p class="self-center font-bold">Cek Emei Iphone</p>
        </div>
    </div>

</div>
<div class="mx-8 rounded-lg bg-[#C4D8EF] py-5 mb-16">
    <div class="flex items-center justify-between mx-4 my-5 ">
        <h1 class="text-3xl font-bold">7 Keuntungan servicein.com</h1>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
            stroke="currentColor" class="w-16 h-16">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
    </div>
    <div class="cont mx-4">
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <h1 class="ml-3">Teknisi Profesional bersertifikat</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>

                <h1 class="ml-3">Layanan Antar Jemput / perbaikan di tempat</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                </svg>


                <h1 class="ml-3">Kualitas Sparepart yang memadai</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                </svg>
                <h1 class="ml-3">Bisa Batal Service</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h1 class="ml-3">Dapat Estimasi Waktu</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
                <h1 class="ml-3">Tracking Perbaikan</h1>
            </div>
        </div>
        <div class="bg-white mt-1  py-2 rounded-xl">
            <div class="flex mx-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>

                <h1 class="ml-3">Cek Biaya Service</h1>
            </div>
        </div>

    </div>

</div>
@endsection