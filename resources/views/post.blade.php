@extends('layouts.main')
@section('container')
    <article class="mx-20">
        <h2 class="text-2xl font-medium text-slate-700">{{ $post->title }}</h2>
        <p>By. {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="underline">{{ $post->category->name }}</a></p>
        <p class="text-base text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
    <div class="mt-10">
        <a href="/blog" class="mx-20 text-blue-500">Back to blog</a>
    </div>
@endsection
