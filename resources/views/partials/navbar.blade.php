 <div class="hidden md:flex mx-20 justify-between items-center py-4">
     <div class="flex items-center gap-2">
         <img src="{{ asset('img/blog.png') }}" alt="Logo" width="60">
         <a href="/" class="text-4xl font-semibold tracking-widest text-slate-700">S'log</a>
     </div>
     <nav>
         <ul class="list-none flex items-center gap-8 lg:gap-16">
             <li class="hover:scale-105">
                 <a href="/"
                     class="{{ $title === 'All Posts' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Posts</a>
             </li>
             <li class="hover:scale-105">
                 <a href="/categories"
                     class="{{ $title === 'Post Categories' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Categories</a>
             </li>
             <li class="hover:scale-105">
                 <a href="/dashboard/posts"
                     class="{{ $title === 'Dashboard' ? 'text-slate-700' : 'text-slate-500' }} text-lg font-medium hover:underline">Manage
                     posts</a>
             </li>
             @auth
                 <li class="hover:scale-105">
                     <button type="button"
                         class="openModal text-lg font-medium hover:underline text-slate-500">Logout</button>
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
 <div class="flex justify-between mx-10 items-center py-2 md:hidden">
     <div class="flex items-center gap-2">
         <img src="{{ asset('img/blog.png') }}" alt="Logo" width="60">
         <a href="/" class="text-2xl font-semibold tracking-widest text-slate-700">S'log</a>
     </div>
     <nav class="relative">
         <div class="openNav">
             @include('feather::menu')
         </div>
         <div class="hidden" id="navbarModal">
             <ul class="absolute list-none flex flex-col top-10 right-6 w-36 bg-gray-300 z-20">
                 <li class="hover:scale-105 py-2 px-4 border-b hover:bg-gray-400">
                     <a href="/"
                         class="{{ $title === 'All Posts' ? 'text-slate-700' : 'text-slate-500' }} text-sm sm:text-base font-medium hover:underline">Posts</a>
                 </li>
                 <li class="hover:scale-105 py-2 px-4 border-b hover:bg-gray-400">
                     <a href="/categories"
                         class="{{ $title === 'Post Categories' ? 'text-slate-700' : 'text-slate-500' }} text-sm sm:text-base font-medium hover:underline">Categories</a>
                 </li>
                 <li class="hover:scale-105 py-2 px-4 border-b hover:bg-gray-400">
                     <a href="/dashboard/posts"
                         class="{{ $title === 'Dashboard' ? 'text-slate-700' : 'text-slate-500' }} text-sm sm:text-base font-medium hover:underline">Manage
                         posts</a>
                 </li>
                 @auth
                     <li class="hover:scale-105 py-2 px-4 border-b hover:bg-gray-400">
                         <button type="button"
                             class="openModal text-sm sm:text-base font-medium hover:underline text-slate-500">Logout</button>
                     </li>
                 @else
                     <li class="hover:scale-105 py-2 px-4 border-b hover:bg-gray-400">
                         <a href="/login"
                             class="{{ $title === 'Login' ? 'text-slate-700' : 'text-slate-500' }} text-sm sm:text-base font-medium hover:underline">Get
                             Started</a>
                     </li>
                 @endauth
             </ul>
         </div>
     </nav>
 </div>
 <div class="hidden" id="logoutModal">
     <div
         class="fixed inset-0 overflow-hidden w-full h-full flex items-center justify-center bg-black bg-opacity-70 z-50">
         <div class="bg-white rounded-xl w-fit h-fit flex flex-col items-center justify-center gap-10 p-5">
             <h3 class="text-lg sm:text-xl md:text-2xl text-slate-700">
                 Apakah anda yakin ingin Logout?
             </h3>
             <div class="flex gap-5">
                 <form action="/logout" method="post">
                     @csrf
                     <button type="submit"
                         class="bg-slate-700 text-slate-100 rounded-2xl w-20 flex justify-center items-center">
                         <p class="py-3 px-5 text-center text-sm sm:text-base md:text-lg">
                             Ya
                         </p>
                     </button>
                 </form>
                 <button type="button"
                     class="closeModal bg-slate-100 text-slate-700 rounded-2xl w-20 flex justify-center items-center">
                     <p class="py-3 px-5 text-center text-sm sm:text-base md:text-lg">
                         Tidak
                     </p>
                 </button>
             </div>
         </div>
     </div>
 </div>
