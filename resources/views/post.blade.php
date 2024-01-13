@extends('layouts.main')
@section('container')
    <article class="mx-10 sm:mx-28 md:mx-44 lg:mx-56 mb-10">
        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-slate-700">{{ $post->title }}</h2>
        <p class="text-slate-700 text-xs sm:text-sm md:text-base">By. <a href="/?user={{ $post->user->username }}" class="underline">{{ $post->user->name }}</a> in <a
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
        <p class="text-sm sm:text-base md:text-lg text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
@endsection
