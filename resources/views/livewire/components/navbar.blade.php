<div>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    {{-- BUTTON KETIKA LAYAR KECIL --}}
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    {{-- END_BUTTON --}}

                    {{-- LOGO KIRI ATAS --}}
                    <div class="flex ms-2 md:me-24">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" class="h-8 me-3"
                            alt="Laravel Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">SPP
                            KDA</span>
                    </div>
                    {{-- END_LOGO --}}
                </div>
                {{-- KANAN ATAS --}}
                
                <form action="{{ route('logout') }}" method="post" >
                    @csrf
                <div class="flex items-center">
                            <button type="submit"
                            class="bg-red-600 rounded-sm p-1.5 pl-3 pr-3 m-0 text-white hover:bg-red-700">
                                Logout
                            </button>
                </div>
                </form>
                {{-- END_KANAN ATAS --}}
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li> --}}
                
                <li>
                    <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg group 
                    {{ request()->routeIs('show.siswa') ? 'bg-blue-500 text-white hover:bg-blue-600' : 'hover:bg-gray-100' }}">
                        <span class="flex-1 ms-3 whitespace-nowrap">Tabel Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/tabel1" class="flex items-center p-2 text-gray-900 rounded-lg group 
                    {{ request()->routeIs('tabelbelumlunas') ? 'bg-blue-500 text-white hover:bg-blue-600' : 'hover:bg-gray-100' }}">
                        <span class="flex-1 ms-3 whitespace-nowrap">Tabel Belum Lunas</span>
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->hasRole('admin'))
                <li class="ml-1 p-1 pl-2 text-sm rounded text-white bg-gray-500">Menu Admin <i class="fas fa-arrow-down-long"></i></li>

                    <li>
                        <a href="{{ route('show.deletedSiswa') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Tabel Siswa Dihapus</span>
                        </a>
                    </li>
                @endif

                
            </ul>
        </div>
    </aside>
</div>
