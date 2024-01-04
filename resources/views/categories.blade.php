@extends('layouts.main')
@section('container')
    <article class="mx-20">
        <h2 class="text-2xl font-medium text-slate-700">Post categories</h2>
        <div class="my-5 flex flex-col gap-5 w-full">
            @foreach ($categories as $category)
                    <ul>
                        <li>
                            <h3 class="text-lg underline"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
                        </li>
                    </ul>
            @endforeach
        </div>
    </article>
@endsection
