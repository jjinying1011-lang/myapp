@extends('layouts.app')

@section('title', 'หน้าแรก - บทความล่าสุด')

@section('content')
<div class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Hero Welcome Banner (Pink Milk Theme) -->
        <div class="relative overflow-hidden bg-gradient-to-r from-pink-400 via-rose-300 to-pink-300 rounded-3xl p-8 sm:p-10 text-white shadow-xl shadow-pink-300/40 mb-10">
            <div class="absolute -right-10 -top-10 w-56 h-56 rounded-full bg-white/20 blur-2xl pointer-events-none"></div>
            <div class="absolute right-1/3 -bottom-10 w-48 h-48 rounded-full bg-pink-500/20 blur-xl pointer-events-none"></div>

            <div class="relative z-10 max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-white/30 backdrop-blur-md text-white border border-white/40 mb-4 shadow-xs">
                    <span>🍓</span>
                    <span>Sweet & Cozy Space</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-black tracking-tight leading-tight mb-3 drop-shadow-xs">
                    ยินดีต้อนรับสู่ PinkSpace 🌸
                </h1>
                <p class="text-white/95 text-sm sm:text-base leading-relaxed mb-6 font-medium">
                    พื้นที่แบ่งปันเรื่องราว บันทึกความคิด และบทความน่ารู้ ในบรรยากาศสีนมชมพูหวานละมุน สบายตา
                </p>
                @auth
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('create') }}" 
                           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white text-pink-600 hover:bg-pink-50 font-bold text-sm shadow-md transition-all active:scale-[0.98]">
                            <svg class="w-4 h-4 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path>
                            </svg>
                            เขียนบทความใหม่
                        </a>
                        <a href="{{ route('blog2') }}" 
                           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-pink-600/30 hover:bg-pink-600/40 text-white font-semibold text-sm border border-white/30 backdrop-blur-sm transition-all">
                            จัดการบทความ
                        </a>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Section Title -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl bg-pink-100 flex items-center justify-center text-pink-500 text-lg shadow-xs">
                    🌸
                </div>
                <div>
                    <h2 class="text-2xl font-black text-slate-800 tracking-tight">บทความล่าสุด</h2>
                    <p class="text-xs text-pink-600/80 font-semibold mt-0.5">รวมเรื่องราวและสาระน่าอ่านที่อัปเดตใหม่</p>
                </div>
            </div>
            <span class="text-xs font-bold text-pink-600 bg-pink-100/70 border border-pink-200 px-3 py-1.5 rounded-full">
                ทั้งหมด {{ count($blogs) }} เรื่อง
            </span>
        </div>

        <!-- Blog Cards Grid -->
        @if(count($blogs) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($blogs as $item)
                    <div class="group bg-white rounded-3xl p-6 border border-pink-100 shadow-md shadow-pink-100/60 hover:shadow-xl hover:shadow-pink-200/50 hover:border-pink-300 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <span class="inline-flex items-center gap-1 text-xs font-bold text-pink-500 bg-pink-50 px-2.5 py-1 rounded-full border border-pink-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-pink-400"></span>
                                    บทความ #{{ $item->id }}
                                </span>
                                <span class="text-[11px] text-slate-400">
                                    {{ $item->created_at ? $item->created_at->format('d M Y') : 'ล่าสุด' }}
                                </span>
                            </div>

                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-pink-600 transition-colors line-clamp-2 mb-2 leading-snug">
                                <a href="/detail/{{ $item->id }}">
                                    {{ $item->title }}
                                </a>
                            </h3>

                            <p class="text-sm text-slate-500 line-clamp-3 leading-relaxed mb-6 font-normal">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-pink-50 flex items-center justify-between">
                            <a href="/detail/{{ $item->id }}" 
                               class="inline-flex items-center gap-1.5 text-sm font-bold text-pink-600 hover:text-pink-700 transition">
                                <span>อ่านเพิ่มเติม</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-3xl p-12 text-center border border-pink-100 shadow-sm">
                <div class="text-4xl mb-3">🍨</div>
                <h3 class="text-base font-bold text-slate-700">ยังไม่มีบทความในขณะนี้</h3>
                <p class="text-xs text-slate-400 mt-1">บทความใหม่ๆ จะปรากฏขึ้นที่นี่เร็วๆ นี้</p>
            </div>
        @endif

    </div>
</div>
@endsection

