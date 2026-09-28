@extends('layouts.app')

@section('title', 'เขียนบทความใหม่')

@section('content')
<div class="py-10">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <!-- Breadcrumbs & Back -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2 text-sm text-pink-600/80 font-medium">
                <a href="{{ url()->previous() }}" class="hover:text-pink-600 transition flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    ย้อนกลับ
                </a>
                <span>/</span>
                <span class="text-slate-800 font-bold">สร้างบทความ</span>
            </div>
        </div>

        <!-- Main Card (Pink Milk Soft Card) -->
        <div class="bg-white rounded-3xl shadow-xl shadow-pink-100/50 border border-pink-100 overflow-hidden">
            <!-- Card Header -->
            <div class="px-8 py-6 bg-gradient-to-r from-pink-50 via-rose-50/40 to-white border-b border-pink-100 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-black text-slate-800 tracking-tight flex items-center gap-2">
                        <span>✨</span> เขียนบทความใหม่
                    </h1>
                    <p class="text-sm text-slate-500 mt-1">แบ่งปันไอเดีย สาระน่ารู้ หรือเรื่องราวดีๆ สู่ชุมชนผู้อ่าน</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-pink-100 border border-pink-200 flex items-center justify-center text-pink-500 text-xl shadow-xs">
                    🍓
                </div>
            </div>

            <!-- Form Content -->
            <form action="{{ url('/author/insert') }}" method="POST" class="p-8 space-y-6">
                @csrf
                <input type="hidden" name="ref" value="{{ url('/author/blog') }}">

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 mb-2">
                        หัวข้อบทความ <span class="text-pink-500">*</span>
                    </label>
                    <div class="relative rounded-2xl shadow-xs">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-pink-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <input type="text" id="title" name="title" required
                            class="block w-full pl-11 pr-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition"
                            placeholder="ระบุหัวข้อบทความที่น่าสนใจของคุณ...">
                    </div>
                </div>

                <!-- Content -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="content" class="block text-sm font-bold text-slate-700">
                            เนื้อหาบทความ <span class="text-pink-500">*</span>
                        </label>
                        <span class="text-xs text-pink-500 font-medium">แบ่งปันเรื่องราวและรายละเอียด</span>
                    </div>
                    <div class="relative rounded-2xl shadow-xs">
                        <textarea id="content" name="content" rows="10" required
                            class="block w-full p-4 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition leading-relaxed"
                            placeholder="เขียนคำบรรยาย หรือรายละเอียดบทความของคุณที่นี่..."></textarea>
                    </div>
                </div>

                <!-- Status Selection -->
                <div>
                    <label for="status" class="block text-sm font-bold text-slate-700 mb-2">สถานะการเผยแพร่</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="relative flex items-center p-3.5 border rounded-2xl cursor-pointer transition hover:bg-pink-50/50 border-emerald-300 bg-emerald-50/40 ring-1 ring-emerald-400">
                            <input type="radio" name="status" value="1" checked class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-pink-300">
                            <div class="ml-3 flex flex-col">
                                <span class="text-sm font-bold text-slate-800 flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    เผยแพร่ทันที (Published)
                                </span>
                                <span class="text-xs text-slate-500 mt-0.5">เปิดให้ผู้ใช้งานทุกคนอ่านบทความได้ทันที</span>
                            </div>
                        </label>

                        <label class="relative flex items-center p-3.5 border rounded-2xl cursor-pointer transition hover:bg-pink-50/50 border-pink-200 bg-white">
                            <input type="radio" name="status" value="0" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-pink-300">
                            <div class="ml-3 flex flex-col">
                                <span class="text-sm font-bold text-slate-800 flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                    บันทึกฉบับร่าง (Draft)
                                </span>
                                <span class="text-xs text-slate-500 mt-0.5">บันทึกไว้ก่อนเพื่อแก้ไขเพิ่มเติมภายหลัง</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Action Footer Buttons -->
                <div class="flex items-center justify-end gap-3 pt-6 border-t border-pink-100">
                    <a href="{{ route('blog2') }}"
                        class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-slate-100 hover:bg-pink-50 hover:text-pink-600 rounded-xl transition">
                        ยกเลิก
                    </a>
                    <button type="submit"
                        class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 active:scale-[0.98] rounded-xl shadow-md shadow-pink-500/25 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                        </svg>
                        บันทึกบทความ
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection