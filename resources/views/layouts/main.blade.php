<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saputra's Blog | {{ $title }} </title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    <div class="w-full bg-slate-300">
        @include('partials.navbar')
    </div>
    <div class="mt-5">@yield('container')</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.openModal').on('click', function(e) {
                $('#logoutModal').removeClass('hidden');
            });
    
            $('.closeModal').on('click', function(e) {
                $('#logoutModal').addClass('hidden');
            });
    
            $('.openNav').on('click', function(e) {
                $('#navbarModal').toggleClass('hidden');
                $(this).toggleClass('openNav closeNav');
            });
        });
    </script>
    
</body>

</html>
