
@extends('layouts.app')

@section('title', $blogs->title)

@section('content')
<div class="py-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Navigation -->
        <div class="mb-6">
            <a href="{{ url('/') }}" 
               class="inline-flex items-center gap-2 text-sm font-bold text-pink-600 hover:text-pink-700 bg-white border border-pink-200 px-4 py-2 rounded-2xl shadow-xs hover:bg-pink-50 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                ย้อนกลับหน้าแรก
            </a>
        </div>

        <!-- Article Card Container -->
        <article class="bg-white rounded-3xl shadow-xl shadow-pink-100/60 border border-pink-100 overflow-hidden">
            <!-- Article Header Banner -->
            <div class="p-8 sm:p-12 bg-gradient-to-br from-pink-50 via-rose-50/40 to-white border-b border-pink-100">
                <div class="flex items-center gap-2 text-xs font-bold text-pink-500 mb-4">
                    <span class="bg-pink-100/80 px-3 py-1 rounded-full border border-pink-200">🌸 บทความ</span>
                    <span>•</span>
                    <span class="text-slate-400">#{{ $blogs->id }}</span>
                </div>

                <h1 class="text-2xl sm:text-4xl font-black text-slate-800 tracking-tight leading-snug mb-4">
                    {{ $blogs->title }}
                </h1>

                <div class="flex items-center gap-3 pt-4 border-t border-pink-100/80 text-xs text-slate-400">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-pink-400 to-rose-400 flex items-center justify-center text-white text-xs font-bold shadow-xs">
                        🍓
                    </div>
                    <div>
                        <p class="font-bold text-slate-700">PinkSpace Writer</p>
                        <p class="text-[11px] text-pink-500">เผยแพร่เมื่อ {{ $blogs->created_at ? $blogs->created_at->format('d M Y') : 'ล่าสุด' }}</p>
                    </div>
                </div>
            </div>

            <!-- Article Body Content -->
            <div class="p-8 sm:p-12">
                <div class="prose prose-pink prose-lg max-w-none text-slate-700 leading-relaxed space-y-4">
                    {!! $blogs->content !!}
                </div>
            </div>

            <!-- Bottom Share / Footer -->
            <div class="px-8 py-6 bg-pink-50/30 border-t border-pink-100 flex items-center justify-between">
                <span class="text-xs text-pink-600 font-semibold">ขอบคุณที่ร่วมติดตามอ่านบทความ 🌸</span>
                <a href="{{ url('/') }}" class="text-xs font-bold text-pink-600 hover:text-pink-700">
                    ดูบทความอื่นๆ เพิ่มเติม →
                </a>
            </div>
        </article>
    </div>
</div>
@endsection

