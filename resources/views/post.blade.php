@extends('layouts.main')
@section('container')
    <article class="mx-56">
        <h2 class="text-2xl font-medium text-slate-700">{{ $post->title }}</h2>
        <p>By. <a href="/?user={{ $post->user->username }}" class="underline">{{ $post->user->name }}</a> in <a
                href="/?category={{ $post->category->slug }}" class="underline">{{ $post->category->name }}</a></p>
        @if ($post->image)
            <div class="max-h-80 overflow-hidden flex items-center justify-center">
                <img class="mt-5" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                    class="object-cover">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                class="w-full">
        @endif
        <p class="text-base text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
    <div class="mt-10">
        <a href="/blog" class="mx-56 text-blue-500">Back to blog</a>
    </div>
@endsection
