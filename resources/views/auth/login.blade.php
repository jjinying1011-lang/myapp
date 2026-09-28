@extends('layouts.app')

@section('title', 'เข้าสู่ระบบ')

@section('content')
<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto">
        <!-- Logo / Icon -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-3xl bg-gradient-to-tr from-pink-500 via-rose-400 to-pink-300 mx-auto flex items-center justify-center text-white text-3xl shadow-lg shadow-pink-500/30 mb-3">
                🍓
            </div>
            <h1 class="text-2xl font-black text-slate-800 tracking-tight">เข้าสู่ระบบ PinkSpace</h1>
            <p class="text-xs text-pink-600/80 font-semibold mt-1">ยินดีต้อนรับกลับเข้าสู่พื้นที่สีนมชมพู</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-3xl shadow-xl shadow-pink-100/60 border border-pink-100 p-8">
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                        อีเมล (Email)
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition @error('email') border-rose-400 @enderror"
                           placeholder="name@example.com">
                    @error('email')
                        <p class="text-xs text-rose-500 font-semibold mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                            รหัสผ่าน (Password)
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-bold text-pink-600 hover:text-pink-700 transition">
                                ลืมรหัสผ่าน?
                            </a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           class="block w-full px-4 py-3 bg-pink-50/30 border border-pink-200 rounded-2xl text-slate-800 font-medium placeholder-pink-300 focus:bg-white focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 text-sm transition @error('password') border-rose-400 @enderror"
                           placeholder="••••••••">
                    @error('password')
                        <p class="text-xs text-rose-500 font-semibold mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input class="h-4 w-4 text-pink-600 focus:ring-pink-400 border-pink-200 rounded-lg cursor-pointer" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="ml-2.5 block text-xs font-semibold text-slate-600 cursor-pointer" for="remember">
                        จดจำการเข้าสู่ระบบ
                    </label>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                            class="w-full py-3.5 px-4 text-sm font-bold text-white bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 active:scale-[0.98] rounded-2xl shadow-md shadow-pink-500/25 transition">
                        เข้าสู่ระบบ
                    </button>
                </div>

                <!-- Register Link -->
                @if (Route::has('register'))
                    <div class="text-center pt-4 border-t border-pink-100">
                        <p class="text-xs text-slate-500">
                            ยังไม่มีบัญชีสมาชิก? 
                            <a href="{{ route('register') }}" class="font-bold text-pink-600 hover:text-pink-700">
                                สมัครสมาชิกใหม่
                            </a>
                        </p>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection

