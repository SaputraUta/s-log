@extends('layouts.main')
@section('container')
    <div class="mx-20">
        <h3 class="text-2xl font-bold text-slate-700">{{ $title }}</h3>
        <form action="/" class="my-3">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}" />
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <input type="text" placeholder="Search..." name="search"
                class="w-1/3 p-2 rounded-lg border-2 border-slate-700 focus:outline-none" value="{{ request('search') }}">
            <button type="submit" class="py-[10px] px-5 font-medium bg-slate-700 text-slate-100 rounded-md">Search</button>
        </form>
        @if ($posts->count())
            <div class="w-full border-2 rounded-lg">
                <div class="p-2 flex flex-col justify-between h-full">
                    <div>
                        @if ($posts[0]->image)
                            <div class="max-h-80 overflow-hidden flex items-center justify-center">
                                <img class="mt-5" src="{{ asset('storage/' . $posts[0]->image) }}"
                                    alt="{{ $posts[0]->category->name }}" class="object-cover">
                            </div>
                        @else
                            <<img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}"
                                alt="{{ $posts[0]->category->name }}" class="w-full">
                        @endif
                        <h2 class="text-xl font-medium text-slate-700 hover:underline"><a
                                href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>
                        <p class="text-sm font-light">By. <a href="/?user={{ $posts[0]->user->username }}"
                                class="underline">{{ $posts[0]->user->name }}</a> in <a
                                href="/?category={{ $posts[0]->category->slug }}"
                                class="underline">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}</p>
                        <p class="mt-5 text-base text-slate-700">{{ $posts[0]->excerpt }}</p>
                    </div>
                    <p class="mt-auto text-base text-blue-700 self-end underline"><a
                            href="/posts/{{ $posts[0]->slug }}">Read more...</a></p>
                </div>
            </div>
            <div class="my-5 grid grid-cols-4 gap-5 w-full">
                @foreach ($posts->skip(1) as $post)
                    <article class="w-full h-full border-2 rounded-lg">
                        <div class="p-2 flex flex-col justify-between h-full">
                            <div>
                                @if ($post->image)
                                    <div class="flex items-center justify-center">
                                        <img class="mt-5" src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->category->name }}" class="object-cover">
                                    </div>
                                @else
                                    <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" class="w-full">
                                @endif
                                <h2 class="text-lg font-medium text-slate-700 hover:underline line-clamp-1"><a
                                        href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                <p class="text-xs font-light">By. <a href="/?user={{ $post->user->username }}"
                                        class="underline">{{ $post->user->name }}</a> in <a
                                        href="/?category={{ $post->category->slug }}"
                                        class="underline">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</p>
                                <p class="mt-5 text-sm text-slate-700">{{ $post->excerpt }}</p>
                            </div>
                            <p class="mt-auto text-sm text-blue-700 self-end underline"><a
                                    href="/posts/{{ $post->slug }}">Read more...</a></p>
                        </div>
                    </article>
                @endforeach
            </div>
    </div>
@else
    <p class="text-center font-bold text-slate-700 mt-5">No post found.</p>
    @endif

    {{ $posts->links() }}
@endsection
