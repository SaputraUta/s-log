@extends('dashboard.layouts.main')

@section('container')
    <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 xl:mx-32 mt-16">
        <h1 class="text-4xl font-bold tracking-wide text-slate-700">Create new post</h1>
    </div>
    <div class="mx-4 sm:mx-8 md:mx-16 lg:mx-24 xl:mx-32 mt-10">
        <form action="/dashboard/posts" method="post" class="flex flex-col gap-3 w-full md:w-1/2 " enctype="multipart/form-data">
            @csrf
            <div class="w-full flex flex-col gap-1">
                <input type="text" name="title" id="title"
                    class="border-2 border-slate-700 text-slate-700 p-2 rounded-lg placeholder:text-slate-700"
                    placeholder="Title" value="{{ old('title') }}" required />
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col gap-1">
                <input type="text" name="slug" id="slug"
                    class="border-2 border-slate-700 text-slate-700 p-2 rounded-lg placeholder:text-slate-700"
                    placeholder="Slug" value="{{ old('slug') }}" readonly required />
                @error('slug')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col gap-1">
                <select name="category_id" id="category_id" class="border-2 border-slate-700 text-slate-700 p-2 rounded-lg">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="image" class="text-slate-700">Choose image</label>
                <input type="file" name="image" id="image"
                    class="border-2 border-slate-700 text-slate-700 p-2 rounded-lg placeholder:text-slate-700"/>
                @error('image')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full flex flex-col gap-1">
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full rounded-lg bg-slate-700 text-white font-bold p-2">Create Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
