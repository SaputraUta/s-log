@extends('layouts.main')
@section('container')
    <article class="mx-56">
        <h2 class="text-2xl font-medium text-slate-700">{{ $post->title }}</h2>
        <p>By. <a href="/blog?user={{ $post->user->username }}"
            class="underline">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="underline">{{ $post->category->name }}</a></p>
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}">
        <p class="text-base text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
    <div class="mt-10">
        <a href="/blog" class="mx-56 text-blue-500">Back to blog</a>
    </div>
@endsection
