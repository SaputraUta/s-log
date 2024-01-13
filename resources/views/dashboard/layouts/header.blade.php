<header class="flex justify-between w-full md:fixed md:z-10 bg-slate-900">
    <div class="p-4 w-64">
        <h2 class="text-lg sm:text-xl md:text-2xl font-semibold tracking-widest text-slate-100">Saputra's Blog</h2>
    </div>
    <button type="button"
        class="openModal text-lg sm:text-xl md:text-2xl font-medium hover:underline text-slate-100 self-end p-4 flex items-center gap-1"><span>@include('feather::log-out')</span>Logout</button>
</header>
<div class="hidden" id="logoutModal">
    <div class="fixed inset-0 overflow-hidden w-full h-full flex items-center justify-center bg-black bg-opacity-70 z-50">
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
