        <aside class="w-64 bg-slate-700 text-slate-100 mt-10">
            <ul class="list-none flex flex-col mt-10 w-full">
                <li class="text-xl font-medium {{ Request::is('dashboard') ? 'text-slate-100' : 'text-slate-300' }} hover:bg-slate-800 hover:cursor-pointer p-4"><a
                        href="/dashboard"
                        class="flex items-center gap-1"><span>@include('feather::home')</span>Dashboard</a></li>
                </li>
                <li class="text-xl font-medium {{ Request::is('dashboard/posts') ? 'text-slate-100' : 'text-slate-300' }} hover:bg-slate-800 hover:cursor-pointer p-4"><a
                        href="/dashboard/posts" class="flex items-center gap-1"><span>@include('feather::file-text')</span>My
                        Posts</a></li>
            </ul>
        </aside>
