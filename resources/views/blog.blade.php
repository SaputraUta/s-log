@extends('layouts.main')
@section('container')
    <div class="mx-20">
        <h3 class="text-2xl font-bold text-slate-700">Posts</h3>
        <div class="my-5 flex flex-col gap-5 w-full">
            @foreach ($posts as $post)
                <article class="w-full border-2 rounded-lg">
                    <div class="p-2">
                        <h2 class="text-xl font-medium text-slate-700 hover:underline"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                        <p class="text-xs font-light">By. {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="underline">{{ $post->category->name }}</a></p>
                        <p class="mt-5 text-base text-slate-700">{{ $post->excerpt }}</p>
                        <p class="mt-5 underline"><a href="/posts/{{ $post->slug }}">Read more...</a></p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
