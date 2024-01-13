@extends('layouts.main')
@section('container')
    <article class="mx-10 md:mx-20">
        <h2 class="text-lg sm:text-xl md:text-2xl font-medium text-slate-700">Post categories</h2>
        <div class="my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 w-full">
            @foreach ($categories as $category)
                    <ul>
                        <li class="relative">
                            <img src="https://source.unsplash.com/500x400/?{{ $category->name }}" alt="{{ $category->name }}" class="w-full">
                            <h3 class="text-sm sm:text-base md:text-lg underline absolute top-1 left-2 text-white p-1 font-medium tracking-widest bg-slate-700 z-10"><a href="/?category={{ $category->slug }}">{{ $category->name }}</a></h3>
                        </li>
                    </ul>
            @endforeach
        </div>
    </article>
@endsection
