@extends('dashboard.layouts.main')

@section('container')
    <article class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 xl:mx-32 mt-5 md:mt-10">
        <h2 class="text-lg sm:text-xl md:text-2xl font-medium text-slate-700 mb-5">{{ $post->title }}</h2>
        <div class="flex gap-1 flex-col sm:flex-row">
            <a href="/dashboard/posts"
                class="text-slate-100 bg-blue-500 py-2 px-5 font-medium flex w-full sm:w-fit gap-1 rounded-lg text-sm sm:text-base">@include('feather::arrow-left')
                Back
                to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                class="text-slate-100 bg-yellow-500 py-2 px-5 font-medium flex w-full sm:w-fit gap-1 rounded-lg text-sm sm:text-base">@include('feather::edit')
                Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                @method('delete')
                @csrf
                <button onclick="return confirm('Are you sure want to delete this post?')"
                    class="text-slate-100 bg-red-500 py-2 px-5 font-medium flex w-full sm:w-fit gap-1 rounded-lg text-sm sm:text-base">@include('feather::x-circle')
                    Delete</button>
            </form>
        </div>
        @if ($post->image)
            <div class="max-h-80 overflow-hidden">
                <img class="mt-5" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="object-cover">
            </div>
        @else
            <img class="mt-5" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                alt="{{ $post->category->name }}">
        @endif

        <p class="text-sm sm:text-base text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
@endsection
