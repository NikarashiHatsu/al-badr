<!DOCTYPE html>
<html
    lang="id"
    class="scroll-smooth"
    x-data
    x-bind:data-theme="$store.darkMode.on ? 'forest' : 'emerald'"
>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('media/logo/inspektorat.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') . "?v=" . config('app.version') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <script src="{{ asset('js/app.js') . "?v=" . config('app.version') }}" defer></script>

    @livewireStyles()
</head>

<body class="font-display antialiased text-base-content">
    <div class="drawer drawer-mobile min-h-screen">
        <input id="drawer" type="checkbox" class="drawer-toggle">
        <main class="drawer-content bg-base-200">
            <div class="flex lg:hidden items-center mb-4 h-16 bg-base-100/50 backdrop-blur-lg border-b border-base-300 px-6 sticky top-0 z-10">
                <label for="drawer" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>
            <div class="p-6">
                {{ $slot }}
            </div>
        </main>
        <div class="drawer-side border-r border-r-base-300">
            <label for="drawer" class="drawer-overlay"></label>
            <aside class="overflow-y-auto w-80 bg-base-100 text-base-content">
                <div class="flex items-center p-4 border-b border-b-base-300 backdrop-blur-lg h-16 max-h-16 sticky top-0 z-50">
                    <img src="{{ asset('assets/ratb/logo_only.png') }}" class="w-6 h-6 object-contain" />
                    <h5 class="text-lg font-medium ml-4">
                        RA Thola Al-Badr
                    </h5>
                </div>
                <div class="px-8 py-4 border-b border-b-base-200">
                    <div class="flex items-center">
                        <div class="w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="text-xs mb-1 line-clamp-1 font-medium">
                                {{ auth()->user()->name }}
                            </span>
                            <span class="text-xs">
                                {{ auth()->user()->is_pimpinan ? 'Pimpinan' : '' }} {{ ucwords(str_replace('_', ' ', auth()->user()->role)) }}
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="menu p-4">
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="ml-2">
                                Dashboard
                            </span>
                        </a>
                    </li>

                    <li class="menu-title mt-4">
                        <span>
                            Data Master
                        </span>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.category.index') }}" class="{{ request()->routeIs('dashboard.category.*') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span class="ml-2">
                                Kategori Blog
                            </span>
                        </a>
                    </li>


                    <li class="menu-title mt-4">
                        <span>
                            Kontrol Pengguna
                        </span>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-2">
                                Pengaturan
                            </span>
                        </a>
                    </li>
                    <form action="{{ route('logout') }}" method="post" x-ref="form" x-data>
                        @csrf
                        <li>
                            <a href="javascript:void(0)" type="submit" class="hover:bg-red-500 hover:text-white" x-on:click="$refs.form.submit()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="ml-2">
                                    Keluar
                                </span>
                            </a>
                        </li>
                    </form>
                </ul>

                <div class="px-8 py-4 border-t border-t-base-200 text-xs backdrop-blur-lg sticky bottom-0">
                    &copy; {{ now()->year }} Dev's Note
                </div>
            </aside>
        </div>
    </div>

    <button
        x-data
        class="btn fixed bottom-6 right-6"
        x-on:click="$store.darkMode.toggle()"
        x-html="$store.darkMode.on ? '☀️' : '🌕'"
    ></button>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('darkMode', {
                on: window.localStorage.getItem('darkMode') === 'true' ?? false,

                toggle() {
                    this.on = !this.on;
                    window.localStorage.setItem('darkMode', this.on);
                }
            });
        });
    </script>

    @livewireScripts()

    @stack('scripts')
</body>

</html>