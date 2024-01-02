<div class="mx-20 flex justify-between items-center py-4">
    <div class="flex items-center gap-2">
        <img src="{{ asset('img/blog.png') }}" alt="Logo" width="60">
        <a href="/" class="text-4xl font-semibold tracking-widest text-slate-700">S'log</a>
    </div>
    <nav>
        <ul class="list-none flex items-center gap-16">
            <li class="hover:scale-105">
                <a href="/" class="{{ ($title === "Home") ? "text-slate-700": "text-slate-500"}} text-lg font-medium hover:underline">Home</a>
            </li>
            <li class="hover:scale-105">
                <a href="/about" class="{{ ($title === "About") ? "text-slate-700": "text-slate-500"}} text-lg font-medium hover:underline">About me</a>
            </li>
            <li class="hover:scale-105">
                <a href="/blog" class="{{ ($title === "Blog") ? "text-slate-700": "text-slate-500"}} text-lg font-medium hover:underline">My blog</a>
            </li>
        </ul>
    </nav>
</div>