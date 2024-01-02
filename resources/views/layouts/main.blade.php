<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saputra's Blog | {{ $title }} </title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <div class="w-full bg-slate-200">
      @include('partials.navbar')
    </div>
    <div class="mt-5">@yield('container')</div>
</body>

</html>
