<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <script type="text/javascript" src="/js/trix.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saputra's blog | Dashboard</title>
    @vite('resources/css/app.css')
    <style>
        trix-toolbar [data-trix-button-group = "file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    @include('dashboard.layouts.header')
    <div class="flex min-h-screen w-full">
        @include('dashboard.layouts.sidebar')
        <main class="flex-1 w-full flex flex-col mt-10 mb-10">
            @yield('container')
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

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
