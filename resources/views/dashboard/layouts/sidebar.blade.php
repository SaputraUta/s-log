<aside class="hidden md:block w-64 bg-slate-700 text-slate-100 mt-10">
    <ul class="list-none flex flex-col mt-10 w-full">
        <li
            class="text-xl font-medium {{ Request::is('dashboard/posts*') ? 'text-slate-100' : 'text-slate-300' }} hover:bg-slate-800 hover:cursor-pointer p-4">
            <a href="/dashboard/posts" class="flex items-center gap-1"><span>@include('feather::file-text')</span>My
                Posts</a>
        </li>
        <li class="text-xl font-medium 'text-slate-100' hover:bg-slate-800 hover:cursor-pointer p-4">
            <a href="/" class="flex items-center gap-1"><span>@include('feather::file-text')</span>
                All Posts</a>
        </li>
    </ul>
    @can('admin')
        <h6 class="text-lg font-bold text-slate-400 ml-4 mt-5">Administrator</h6>
        <ul class="list-none flex flex-col w-full">
            <li
                class="text-xl font-medium {{ Request::is('dashboard/categories/*') ? 'text-slate-100' : 'text-slate-300' }} hover:bg-slate-800 hover:cursor-pointer p-4">
                <a href="/dashboard/categories"
                    class="flex items-center gap-1"><span>@include('feather::list')</span>Post Categories</a>
            </li>
        </ul>
    @endcan
</aside>
<nav class="md:hidden border-b-2">
    <ul class="flex gap-5 w-full">
        <li
            class="text-base sm:text-lg font-medium {{ Request::is('dashboard/posts*') ? 'underline' : '' }} hover:bg-slate-800 hover:cursor-pointer p-4">
            <a href="/dashboard/posts" class="flex items-center gap-1">My
                Posts</a>
        </li>
        <li class="text-base sm:text-lg font-medium text-slate-700 hover:bg-slate-800 hover:cursor-pointer p-4">
            <a href="/" class="flex items-center gap-1">
                All Posts</a>
        </li>
    </ul>
</nav>
