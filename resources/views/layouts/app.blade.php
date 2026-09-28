<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Ladawan </title>

    <!-- Google Fonts & Tailwind CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', '"Sarabun"', 'sans-serif'],
                        thai: ['"Sarabun"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fff0f6',
                            100: '#ffe4f0',
                            200: '#fecddf',
                            300: '#fda4c7',
                            400: '#fb71a7',
                            500: '#f43f8e',
                            600: '#e11d74',
                            700: '#be125f',
                            800: '#9d1350',
                            900: '#831445',
                        }
                    }
                }
            }
        }
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Sarabun', sans-serif;
            background-color: #fff6fa;
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(254, 205, 223, 0.45) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(253, 164, 199, 0.35) 0%, transparent 40%),
                radial-gradient(circle at 50% 50%, rgba(255, 240, 246, 0.6) 0%, transparent 60%);
            background-attachment: fixed;
        }

        /* Pink milk custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #fff0f6;
        }
        ::-webkit-scrollbar-thumb {
            background: #fecddf;
            border-radius: 9999px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #fb71a7;
        }
    </style>
</head>

<body class="min-h-full flex flex-col text-slate-800 antialiased selection:bg-pink-400 selection:text-white">
    <div id="app" class="flex flex-col min-h-screen">
        <!-- Modern Pink Milk Glass Navbar -->
        <nav class="sticky top-0 z-50 backdrop-blur-md bg-white/85 border-b border-pink-100 shadow-sm shadow-pink-100/50 transition-all">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Brand Logo -->
                    <div class="flex items-center gap-8">
                        <a class="flex items-center gap-2.5 group" href="{{ url('/') }}">
                            <div class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-pink-500 via-rose-400 to-pink-300 flex items-center justify-center text-white shadow-md shadow-pink-500/25 group-hover:scale-105 group-hover:rotate-3 transition-transform">
                                <span class="text-xl">🍓</span>
                            </div>
                            <span class="font-extrabold text-lg text-slate-800 tracking-tight group-hover:text-pink-600 transition-colors">
                                Pink<span class="bg-gradient-to-r from-pink-500 to-rose-400 bg-clip-text text-transparent">Space</span>
                            </span>
                        </a>

                        <!-- Desktop Navigation Links -->
                        <div class="hidden md:flex items-center gap-1.5">
                            <a href="{{ url('/') }}" class="px-3.5 py-2 text-sm font-semibold rounded-xl transition-all {{ request()->is('/') ? 'text-pink-600 bg-pink-50 border border-pink-200/60 shadow-xs' : 'text-slate-600 hover:text-pink-600 hover:bg-pink-50/60' }}">
                                🌸 หน้าแรก
                            </a>
                            <a href="{{ Auth::check() ? route('blog') : route('login') }}" class="px-3.5 py-2 text-sm font-semibold rounded-xl transition-all {{ request()->routeIs('blog') ? 'text-pink-600 bg-pink-50 border border-pink-200/60 shadow-xs' : 'text-slate-600 hover:text-pink-600 hover:bg-pink-50/60' }}">
                                📖 คลังบทความ
                            </a>
                            <a href="{{ Auth::check() ? route('blog2') : route('login') }}" class="px-3.5 py-2 text-sm font-semibold rounded-xl transition-all {{ request()->routeIs('blog2') ? 'text-pink-600 bg-pink-50 border border-pink-200/60 shadow-xs' : 'text-slate-600 hover:text-pink-600 hover:bg-pink-50/60' }}">
                                ⚙️ จัดการระบบ
                            </a>
                        </div>
                    </div>

                    <!-- Right Navigation Side -->
                    <div class="flex items-center gap-3">
                        @guest
                            <a href="{{ route('blog2') }}" class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 text-sm font-bold text-white bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 rounded-xl shadow-md shadow-pink-500/20 hover:shadow-pink-500/35 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 3m0-3a2 2 0 110 3m-3.793-3a3 3 0 01-2.17-1.025M15.793 3a3 3 0 012.17-1.025M3 18v-2a4 4 0 014-4h10a4 4 0 014 4v2m-3-10a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <span>เข้าสู่ระบบหลังบ้าน</span>
                            </a>
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-bold text-pink-600 hover:text-pink-700 hover:bg-pink-50/70 rounded-xl transition">
                                    {{ __('เข้าสู่ระบบ') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold text-pink-600 bg-pink-100/70 hover:bg-pink-200/70 rounded-xl border border-pink-200 transition">
                                    {{ __('สมัครสมาชิก') }}
                                </a>
                            @endif
                        @else
                            <!-- User Profile Dropdown -->
                            <div class="relative dropdown">
                                <button id="navbarDropdown" class="flex items-center gap-2.5 p-1.5 pl-3 rounded-full border border-pink-200 hover:border-pink-300 bg-white hover:bg-pink-50/50 shadow-xs transition" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="text-sm font-bold text-slate-700 max-w-[120px] truncate">{{ Auth::user()->name }}</span>
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-pink-400 to-rose-400 flex items-center justify-center text-white text-xs font-black ring-2 ring-pink-100 shadow-xs">
                                        {{ strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end shadow-xl border border-pink-100 rounded-2xl py-2 mt-2 w-56 text-sm bg-white/95 backdrop-blur-md" aria-labelledby="navbarDropdown">
                                    <div class="px-4 py-2 border-b border-pink-100 mb-1 bg-pink-50/40">
                                        <p class="text-xs text-pink-400 font-bold uppercase tracking-wider">บัญชีผู้ใช้</p>
                                        <p class="text-sm font-bold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                                    </div>

                                    <a class="flex items-center gap-2.5 px-4 py-2 text-slate-700 hover:bg-pink-50 hover:text-pink-600 transition font-semibold" href="{{ route('create') }}">
                                        <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        เขียนบทความใหม่
                                    </a>

                                    <a class="flex items-center gap-2.5 px-4 py-2 text-slate-700 hover:bg-pink-50 hover:text-pink-600 transition font-semibold" href="{{ route('blog2') }}">
                                        <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                        </svg>
                                        จัดการบทความทั้งหมด
                                    </a>

                                    <div class="border-t border-pink-100 my-1"></div>

                                    <a class="flex items-center gap-2.5 px-4 py-2 text-rose-500 hover:bg-rose-50 transition font-semibold"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        ออกจากระบบ
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content Section -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Minimalist Pink Milk Footer -->
        <footer class="border-t border-pink-100 bg-white/70 backdrop-blur-sm py-6 mt-16">
            <div class="max-w-7xl mx-auto px-4 text-center text-xs font-medium text-pink-700/70">
                &copy; {{ date('Y') }} <span class="text-pink-600 font-bold">PinkSpace 🌸</span>. ตกแต่งด้วยโทนนมชมพูหวานละมุน นุ่มนวล สบายตา
            </div>
        </footer>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Summernote Lite CSS & JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#content').summernote({
                placeholder: 'เขียนเนื้อหาบทความที่นี่...',
                tabsize: 2,
                height: 250,
                callbacks: {
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });
        });
    </script>
</body>

</html>