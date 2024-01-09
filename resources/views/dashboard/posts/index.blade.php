@extends('dashboard.layouts.main')

@section('container')
    <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 xl:mx-32 mt-16">
        <h1 class="text-4xl font-bold tracking-wide text-slate-700">My Posts</h1>
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full border border-slate-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100">No</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100">Title</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100">Category</th>
                        <th class="py-2 px-4 border-b text-left bg-slate-700 text-slate-100">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                            <td class="py-2 px-4 border-b">{{ $post->category->name }}</td>
                            <td class="py-2 px-4 flex flex-col items-center justify-center sm:flex-row gap-5 sm:gap-5 w-full">
                                <a href="/dashboard/posts/{{ $post->slug }}"
                                    class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                    @include('feather::eye')
                                </a>
                                <a href="#" class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                    @include('feather::edit')
                                </a>
                                <a href="#" class="text-slate-700 hover:text-slate-500 transition duration-300 border-b sm:border-b-0">
                                    @include('feather::x-circle')
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
