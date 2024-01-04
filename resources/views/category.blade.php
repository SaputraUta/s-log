@extends('layouts.main')
@section('container')
    <article class="mx-20">
        <h2 class="text-2xl font-medium text-slate-700">{{ $category }}</h2>
        <div class="my-5 flex flex-col gap-5 w-full">
            @foreach ($posts as $post)
                <article class="w-full border-2 rounded-lg">
                    <div class="p-2">
                        <h2 class="text-xl font-medium text-slate-700 hover:underline"><a
                                href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                        <p class="text-base text-slate-700">{{ $post->excerpt }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </article>
    <div class="mt-10">
        <a href="/blog" class="mx-20 text-blue-500">Back to blog</a>
    </div>
@endsection
