<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <div class="md:flex min-h-screen w-full">
        @include('dashboard.layouts.sidebar')
        <main class="flex-1 w-full flex flex-col md:mt-10 mb-10">
            @yield('container')
        </main>
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

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
