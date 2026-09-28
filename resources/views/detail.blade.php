
@extends('layouts.app');

@section('content')
@section('title'){{$blogs->title}}
@endsection;

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2>{{$blogs->title}}</h2>
            <hr>
            {{-- <div>{!! $blogs->content !!}</div> --}}
            <div class="prose prose-lg max-w-none">
                {!! $blogs->content !!}
            </div>
    </div>
@endsection;
