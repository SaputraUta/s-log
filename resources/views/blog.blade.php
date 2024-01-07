@extends('layouts.main')
@section('container')
    <div class="mx-20">
        <h3 class="text-2xl font-bold text-slate-700">{{ $title }}</h3>
        @if ($posts->count())
            <div class="mt-5 w-full border-2 rounded-lg">
                <div class="p-2 flex flex-col justify-between h-full">
                    <div>
                    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="w-full">
                    <h2 class="text-xl font-medium text-slate-700 hover:underline"><a
                            href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>
                    <p class="text-sm font-light">By. <a href="/author/{{ $posts[0]->user->username }}"
                            class="underline">{{ $posts[0]->user->name }}</a> in <a
                            href="/categories/{{ $posts[0]->category->slug }}"
                            class="underline">{{ $posts[0]->category->name }}</a>  {{ $posts[0]->created_at->diffForHumans() }}</p>
                    <p class="mt-5 text-base text-slate-700">{{ $posts[0]->excerpt }}</p>
                </div>
                    <p class="mt-auto text-base text-blue-700 self-end underline"><a
                        href="/posts/{{ $posts[0]->slug }}">Read more...</a></p>
                </div>
            </div>
        @else
            <p class="text-center font-bold text-slate-700 mt-5">No post found.</p>
        @endif
        <div class="my-5 grid grid-cols-4 gap-5 w-full">
            @foreach ($posts->skip(1) as $post)
                <article class="w-full h-full border-2 rounded-lg">
                    <div class="p-2 flex flex-col justify-between h-full">
                        <div>
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="w-full">
                            <h2 class="text-lg font-medium text-slate-700 hover:underline line-clamp-1"><a
                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                            <p class="text-xs font-light">By. <a href="/author/{{ $post->user->username }}"
                                    class="underline">{{ $post->user->name }}</a> in <a
                                    href="/categories/{{ $post->category->slug }}"
                                    class="underline">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                            <p class="mt-5 text-sm text-slate-700">{{ $post->excerpt }}</p>
                        </div>
                        <p class="mt-auto text-sm text-blue-700 self-end underline"><a
                                href="/posts/{{ $post->slug }}">Read more...</a></p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
