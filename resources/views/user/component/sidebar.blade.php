<aside class="z-20 hidden w-64 overflow-y-auto bg-white  md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a href="#">
            <img src="{{ asset('user/assets/img/logo1.png') }}" alt="">
        </a>
        <ul class="mt-6 mr-4">
            <li
                class="{{ request()->is('dashboard') ? ' text-white bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]' : '' }}  relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 "
                    href="{{route('dashboard')}}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li
                class="{{ request()->is('user/tabelresi') ? ' text-white bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]' : '' }}  relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="{{route('tabelresi.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="ml-4">Cek Pesanan</span>
                </a>
            </li>

            <hr>
            <div class="mx-6 my-3 text-gray-300 text-[13px] ">

                <span>pages</span>

            {{-- </div>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span class="ml-4">Riwayat</span>
                </a>
            </li>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                    </svg>


                    <span class="ml-4">Tarcking</span>
                </a>
            </li>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                    </svg>
                    <span class="ml-4">Chat</span>
                </a>
            </li>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                    <span class="ml-4">Pembayaran</span>
                </a>
            </li>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                    </svg>



                    <span class="ml-4">Buku Panduan</span>
                </a>
            </li>
            <hr>
            <div class="mx-6 my-3 text-gray-300 text-[13px] ">

                <span>logout</span>

            </div>
            <li
                class=" relative px-6 py-3  text-gray-800 rounded-r-3xl hover:text-white hover:bg-gradient-to-r from-[#0F82EC] to-[#1DCCC2]">
                <a class="inline-flex items-center w-full  text-sm font-semibold  transition-colors duration-150 "
                    href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>

                    <span class="ml-4">Logout</span>
                </a>
            </li> --}}
        </ul>


    </div>
</aside>