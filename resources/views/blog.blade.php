@extends('layout')

@section('title')
    จัดการบทความ
@endsection

@section('content')
    {{-- Alert แสดงผลข้อความแจ้งเตือน --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4 d-flex align-items-center justify-content-between"
            role="alert"
            style="border-radius: 14px; background: #ecfdf5; color: #065f46; border-left: 5px solid #10b981 !important;">
            <div class="d-flex align-items-center gap-2">
                <span class="fs-5">🎉</span>
                <div>
                    <strong class="d-block" style="font-size: 0.95rem;">สำเร็จ!</strong>
                    <span style="font-size: 0.9rem;">{{ session('success') }}</span>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4 d-flex align-items-center justify-content-between"
            role="alert"
            style="border-radius: 14px; background: #fef2f2; color: #991b1b; border-left: 5px solid #ef4444 !important;">
            <div class="d-flex align-items-center gap-2">
                <span class="fs-5">⚠️</span>
                <div>
                    <strong class="d-block" style="font-size: 0.95rem;">เกิดข้อผิดพลาด!</strong>
                    <span style="font-size: 0.9rem;">{{ session('error') }}</span>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ส่วนหัวของหน้า (Header Section) --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <h1 class="fw-extrabold tracking-tight mb-0 fs-2"
                    style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 800;">
                    รายการบทความทั้งหมด
                </h1>
                <span class="badge py-1 px-3"
                    style="background: var(--pink-100); color: var(--plum-900); border-radius: 30px; font-weight: 600; font-size: 0.85rem;">
                    {{ $blogs->total() }} รายการ
                </span>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.95rem;">จัดการ แก้ไข และดูข้อมูลบทความในระบบทั้งหมด</p>
        </div>

        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('blog.create') }}"
                class="btn-modern-primary text-decoration-none d-inline-flex align-items-center gap-2">
                <span>✨</span>
                <span>เขียนบทความใหม่</span>
            </a>
        </div>
    </div>

    {{-- ตารางแสดงรายการบทความ (Articles Table) --}}
    @if (count($blogs) > 0)
        <div class="card-modern overflow-hidden border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="border-collapse: separate; border-spacing: 0;">
                        <thead style="background: var(--dark-gradient);">
                            <tr>
                                <th class="text-white py-3 px-4 text-center"
                                    style="width: 6%; font-weight: 600; font-size: 0.9rem;">#</th>
                                <th class="text-white py-3" style="width: 26%; font-weight: 600; font-size: 0.9rem;">หัวข้อ
                                    (Title)</th>
                                <th class="text-white py-3" style="width: 36%; font-weight: 600; font-size: 0.9rem;">เนื้อหา
                                    (Content)</th>
                                <th class="text-white py-3 text-center"
                                    style="width: 12%; font-weight: 600; font-size: 0.9rem;">สถานะ (Status)</th>
                                <th class="text-white py-3 text-center"
                                    style="width: 10%; font-weight: 600; font-size: 0.9rem;">วันที่สร้าง</th>
                                <th class="text-white py-3 px-4 text-center"
                                    style="width: 10%; font-weight: 600; font-size: 0.9rem;">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr style="transition: var(--transition);">
                                    {{-- ลำดับ --}}
                                    <td class="text-center py-3 px-4 fw-bold" style="color: var(--pink-500); font-size: 0.95rem;">
                                        {{ ($blogs->currentPage() - 1) * $blogs->perPage() + $loop->iteration }}
                                    </td>

                                    {{-- หัวข้อ --}}
                                    <td class="py-3">
                                        <div class="fw-bold text-dark mb-1" style="font-size: 0.95rem; line-height: 1.4;">
                                            {{ $blog->title }}
                                        </div>
                                    </td>

                                    {{-- เนื้อหา --}}
                                    <td class="py-3">
                                        <div class="text-muted text-truncate"
                                            style="max-width: 380px; font-size: 0.9rem; line-height: 1.5;">
                                            {{ Str::limit($blog->content, 90, '...') }}
                                        </div>
                                    </td>

                                    {{-- สถานะ --}}
                                    <td class="py-3 text-center">
                                        @if ($blog->status)
                                            <span class="badge rounded-pill px-3 py-2"
                                                style="background: #e6f9ef; color: #1a9e63; font-weight: 600; font-size: 0.8rem; border: 1px solid #bbf7d0;">
                                                🟢 เผยแพร่แล้ว
                                            </span>
                                        @else
                                            <span class="badge rounded-pill px-3 py-2"
                                                style="background: var(--pink-100); color: var(--plum-900); font-weight: 600; font-size: 0.8rem; border: 1px solid var(--pink-200);">
                                                🎀 ฉบับร่าง
                                            </span>
                                        @endif
                                    </td>

                                    {{-- วันที่สร้าง --}}
                                    <td class="py-3 text-center">
                                        <span class="text-muted" style="font-weight: 500; font-size: 0.85rem;">
                                            {{ $blog->created_at ? \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') : '-' }}
                                        </span>
                                    </td>

                                    {{-- จัดการ --}}
                                    <td class="py-3 px-4">
                                        <div class="d-flex gap-2 justify-content-center align-items-center">
                                            <a href="{{ route('blog.edit', $blog->id) }}"
                                                class="btn btn-modern-warning btn-sm py-1 px-3 shadow-none text-decoration-none d-inline-flex align-items-center gap-1"
                                                title="แก้ไขบทความ" style="font-size: 0.85rem;">
                                                <span>✏️</span>
                                                <span>แก้ไข</span>
                                            </a>

                                            <form action="{{ route('blog.delete', $blog->id) }}" method="POST"
                                                onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบบทความนี้?')" class="m-0 p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-modern-danger btn-sm py-1 px-3 shadow-none d-inline-flex align-items-center gap-1"
                                                    title="ลบบทความ" style="font-size: 0.85rem;">
                                                    <span>🗑️</span>
                                                    <span>ลบ</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- ตัวแบ่งหน้า (Pagination) --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    @else
        {{-- กล่องแสดงสถานะเมื่อไม่มีข้อมูล --}}
        <div class="card-modern border-0 text-center py-5 text-muted">
            <div class="py-5">
                <span class="d-block mb-3" style="font-size: 3.5rem;">📝</span>
                <h3 class="fs-5 fw-bold text-dark mb-2">ยังไม่มีบทความในระบบ</h3>
                <p class="text-muted mb-4" style="font-size: 0.95rem;">
                    เริ่มต้นสร้างสรรค์เนื้อหาใหม่และเผยแพร่บทความแรกของคุณได้เลย</p>
                <a href="{{ route('blog.create') }}"
                    class="btn-modern-primary text-decoration-none d-inline-flex align-items-center gap-2">
                    <span>✨</span>
                    <span>เขียนบทความใหม่ตอนนี้</span>
                </a>
            </div>
        </div>
    @endif
@endsection