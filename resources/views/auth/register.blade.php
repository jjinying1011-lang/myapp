@extends('layouts.app')

@section('title', 'สมัครสมาชิก')

@section('content')
<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto">
        <!-- Logo / Icon -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-3xl bg-gradient-to-tr from-pink-500 via-rose-400 to-pink-300 mx-auto flex items-center justify-center text-white text-3xl shadow-lg shadow-pink-500/30 mb-3">
                🌸
            </div>
            <h1 class="text-2xl font-black text-slate-800 tracking-tight">สมัครสมาชิกใหม่</h1>
            <p class="text-xs text-pink-600/80 font-semibold mt-1">เริ่มต้นสร้างสรรค์บทความในพื้นที่ PinkSpace</p>
        </div>

        <!-- Register Card -->
        <div class="bg-white rounded-3xl shadow-xl shadow-pink-100/60 border border-pink-100 p-8">
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        ชื่อ-นามสกุล (Name)
                    </label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition @error('name') border-rose-400 @enderror"
                           placeholder="ชื่อของคุณ">
                    @error('name')
                        <p class="text-xs text-rose-500 font-semibold mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        อีเมล (Email)
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition @error('email') border-rose-400 @enderror"
                           placeholder="name@example.com">
                    @error('email')
                        <p class="text-xs text-rose-500 font-semibold mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        รหัสผ่าน (Password)
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition @error('password') border-rose-400 @enderror"
                           placeholder="••••••••">
                    @error('password')
                        <p class="text-xs text-rose-500 font-semibold mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password-confirm" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        ยืนยันรหัสผ่าน (Confirm Password)
                    </label>
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition"
                           placeholder="••••••••">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full py-3.5 px-4 text-sm font-bold text-white bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 active:scale-[0.98] rounded-2xl shadow-md shadow-pink-500/25 transition">
                        สร้างบัญชีสมาชิก
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center pt-4 border-t border-pink-100">
                    <p class="text-xs text-slate-500">
                        มีบัญชีสมาชิกอยู่แล้ว? 
                        <a href="{{ route('login') }}" class="font-bold text-pink-600 hover:text-pink-700">
                            เข้าสู่ระบบ
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

