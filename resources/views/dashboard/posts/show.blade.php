@extends('dashboard.layouts.main')

@section('container')
    <article class="mx-20 mt-10">
        <h2 class="text-2xl font-medium text-slate-700 mb-5">{{ $post->title }}</h2>
        <div class="flex gap-1">
            <a href="/dashboard/posts"
                class="text-slate-100 bg-blue-500 py-2 px-5 font-medium flex w-fit gap-1 rounded-lg">@include('feather::arrow-left')
                Back
                to my posts</a>
            <a href=""
                class="text-slate-100 bg-yellow-500 py-2 px-5 font-medium flex w-fit gap-1 rounded-lg">@include('feather::edit')
                Edit</a>
            <a href=""
                class="text-slate-100 bg-red-500 py-2 px-5 font-medium flex w-fit gap-1 rounded-lg">@include('feather::x-circle')
                Delete</a>
        </div>
        <img class="mt-5" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
            alt="{{ $post->category->name }}">
        <p class="text-base text-slate-700 mt-5">
            {!! $post['body'] !!}
        </p>
    </article>
@endsection
