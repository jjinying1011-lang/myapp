@extends('layouts.app')

@section('title')
    {{ $blog->title }}
@endsection

@section('content')
    <article class="card-modern p-4 p-md-5" style="max-width: 860px; margin: 0 auto;">
        <h1 class="fw-bold mb-2" style="color: var(--plum-900);">{{ $blog->title }}</h1>
        <small class="text-muted">
            {{ $blog->created_at ? $blog->created_at->format('d/m/Y') : '' }}
        </small>
        <hr>
        {{-- เนื้อหาจาก Summernote เป็น HTML จึงใช้ {!! !!} เพื่อแสดงผลแบบไม่ escape --}}
        <div class="post-content">{!! $blog->content !!}</div>
        <hr>
        <a href="{{ route('index') }}" class="btn-modern-secondary text-decoration-none align-self-start">← กลับหน้าแรก</a>
    </article>
@endsection
