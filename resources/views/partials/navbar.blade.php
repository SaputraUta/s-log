<div class="mx-20 flex justify-between items-center py-4">
    <div class="flex items-center gap-2">
        <img src="{{ asset('img/blog.png') }}" alt="Logo" width="60">
        <a href="/" class="text-4xl font-semibold tracking-widest text-slate-700">S'log</a>
    </div>
    <nav>
        <ul class="list-none flex items-center gap-16">
            <li class="hover:scale-105">
                <a href="/"
                    class="{{ $title === 'Home' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Home</a>
            </li>
            <li class="hover:scale-105">
                <a href="/about"
                    class="{{ $title === 'About' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">About
                    me</a>
            </li>
            <li class="hover:scale-105">
                <a href="/blog"
                    class="{{ $title === 'Blog' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">My
                    blog</a>
            </li>
            <li class="hover:scale-105">
                <a href="/categories"
                    class="{{ $title === 'Post Categories' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Categories</a>
            </li>
            @auth
                <li class="hover:scale-105">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"><p class="text-slate-500 text-lg font-medium hover:underline">Logout</p></button>
                    </form>
                </li>
            @else
                <li class="hover:scale-105">
                    <a href="/login"
                        class="{{ $title === 'Login' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Get
                        Started</a>
                </li>
            @endauth
        </ul>
    </nav>
</div>
