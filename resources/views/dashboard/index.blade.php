<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saputra's blog | Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex min-h-screen w-full">
        <aside class="w-64 bg-slate-700 text-slate-100">
            <div class="bg-slate-900 p-4">
                <h2 class="text-2xl font-semibold tracking-widest text-slate-100">Saputra's Blog</h2>
            </div>

            <ul class="list-none flex flex-col mt-10 w-full">
                <li class="text-xl font-medium text-slate-100 hover:bg-slate-800 hover:cursor-pointer p-4">Dashboard
                </li>
                <li class="text-xl font-medium text-slate-100 hover:bg-slate-800 hover:cursor-pointer p-4">My Posts</li>
            </ul>

        </aside>
        <main class="flex-1 w-full flex flex-col">
            <button type="button"
                class="openModal text-2xl font-medium hover:underline text-slate-700 self-end p-4">Logout</button>
            <div class="mx-20">
                <h1 class="text-4xl font-bold tracking-wide text-slate-700">Hello, {{ auth()->user()->name }}!</h1>
            </div>
        </main>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.openModal').on('click', function(e) {
                $('#logoutModal').removeClass('hidden');
            });

            $('.closeModal').on('click', function(e) {
                $('#logoutModal').addClass('hidden');
            });
        });
    </script>
</body>

</html>
