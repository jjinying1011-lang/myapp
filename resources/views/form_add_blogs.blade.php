@extends('layout')

@section('title')
    เขียนบทความใหม่
@endsection

@section('content')
    <div style="max-width: 780px; margin: 0 auto;">
        {{-- Header Section --}}
        <div
            class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-4">
            <div>
                <h1 class="fw-extrabold tracking-tight mb-1 fs-2"
                    style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">
                    เขียนบทความใหม่
                </h1>
                <p class="text-muted mb-0" style="font-size: 0.95rem;">สร้างและแบ่งปันเนื้อหาใหม่เข้าสู่ระบบของคุณ</p>
            </div>
            <a href="{{ route('blog') }}"
                class="btn-modern-secondary text-decoration-none d-inline-flex align-items-center gap-2">
                <span>⬅️</span>
                <span>กลับหน้ารวมบทความ</span>
            </a>
        </div>

        {{-- Form Card --}}
        <div class="card-modern border-0 p-4 p-md-5">
            <form action="{{ route('blog.store') }}" method="POST">
                @csrf

                {{-- หัวข้อบทความ --}}
                <div class="mb-4">
                    <label for="title" class="form-label fw-semibold text-dark mb-2" style="font-size: 0.95rem;">
                        หัวข้อบทความ (Title) <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror"
                        id="title" name="title" value="{{ old('title') }}"
                        placeholder="กรอกหัวข้อบทความที่น่าสนใจ..."
                        style="border-radius: 12px; font-size: 1rem; border-color: #fbdce9; padding: 0.8rem 1rem;">
                    @error('title')
                        <div class="invalid-feedback mt-2" style="font-weight: 500;">{{ $message }}</div>
                    @enderror
                </div>

                {{-- เนื้อหาบทความ --}}
                <div class="mb-4">
                    <label for="content" class="form-label fw-semibold text-dark mb-2" style="font-size: 0.95rem;">
                        เนื้อหาบทความ (Content) <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="8"
                        placeholder="แบ่งปันข้อมูล รายละเอียดเนื้อหาที่นี่..."
                        style="border-radius: 12px; font-size: 1rem; border-color: #fbdce9; padding: 0.8rem 1rem; line-height: 1.6;">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback mt-2" style="font-weight: 500;">{{ $message }}</div>
                    @enderror
                </div>

                {{-- สถานะการเผยแพร่ --}}
                <div class="mb-4">
                    <label for="status" class="form-label fw-semibold text-dark mb-2" style="font-size: 0.95rem;">
                        สถานะการเผยแพร่ <span class="text-danger">*</span>
                    </label>
                    <select class="form-select form-select-lg @error('status') is-invalid @enderror" id="status"
                        name="status"
                        style="border-radius: 12px; font-size: 1rem; border-color: #fbdce9; padding: 0.8rem 1rem;">
                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>🟢 เผยแพร่ทันที (Active)
                        </option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>🎀 บันทึกเป็นฉบับร่าง (Draft)
                        </option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback mt-2" style="font-weight: 500;">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-4" style="border-color: #fbdce9;">

                {{-- Action Buttons --}}
                <div class="d-flex justify-content-end align-items-center gap-3">
                    <a href="{{ route('blog') }}" class="btn-modern-secondary text-decoration-none">
                        ยกเลิก
                    </a>
                    <button type="submit" class="btn-modern-primary d-inline-flex align-items-center gap-2">
                        <span>💾</span>
                        <span>บันทึกบทความ</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
