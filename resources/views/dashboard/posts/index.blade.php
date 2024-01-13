@extends('dashboard.layouts.main')

@section('container')
    <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 xl:mx-32 mt-5 md:mt-16">
        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold tracking-wide text-slate-700">Hello, {{ auth()->user()->name }}!</h1>
        <div class="overflow-x-auto mt-6">
            <a href="/dashboard/posts/create"
                class="block mb-5 w-fit py-2 px-5 bg-green-500 text-slate-100 font-bold text-base sm:text-lg md:text-xl tracking-wide rounded-lg">Create
                new post</a>
            @if (session()->has('success'))
                <p class="pb-2 text-green-500">{{ session('success') }}</p>
            @endif
            <table class="min-w-full border border-slate-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100 text-sm sm:text-base">No</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100 text-sm sm:text-base">Title</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100 text-sm sm:text-base">Category</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100 text-sm sm:text-base">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="sm:py-2 px-2 sm:px-4 text-center border-b text-sm sm:text-base">{{ $loop->iteration }}</td>
                            <td class="sm:py-2 px-2 sm:px-4 text-center border-b text-sm sm:text-base">{{ $post->title }}</td>
                            <td class="sm:py-2 px-2 sm:px-4 text-center border-b text-sm sm:text-base">{{ $post->category->name }}</td>
                            <td class="sm:py-2 px-2 sm:px-4 flex flex-col justify-center items-center sm:flex-row gap-5 sm:gap-5 w-full">
                                <a href="/dashboard/posts/{{ $post->slug }}"
                                    class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                    @include('feather::eye')
                                </a>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                    class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                    @include('feather::edit')
                                </a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="flex items-center">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        onclick="return confirm('Are you sure want to delete this post?')"
                                        class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                        @include('feather::x-circle')
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
