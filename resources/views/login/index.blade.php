<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100 min-h-screen flex flex-col justify-center">
    @if (session()->has('success'))
        <small class="block text-center text-lg text-green-500 tracking-wider">
            {{ session('success') }}
        </small>
    @endif

    @if (session()->has('loginError'))
        <small class="block text-center text-lg text-red-500 tracking-wider">
            {{ session('loginError') }}
        </small>
    @endif
    <h2 class="text-2xl font-bold tracking-wide text-center">Please Login First</h2>
    <main class="mt-10 flex items-center justify-center">
        <form action="/login" method="post" class="max-w-xl flex flex-col w-full">
            @csrf
            <div class="flex flex-col">
                <label for="email" class="font-medium text-slate-700">Email</label>
                <input type="email" name="email"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" autofocus required
                    value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mt-2">
                <label for="password" class="font-medium text-slate-700">Password</label>
                <input type="password" name="password"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" required />
            </div>
            <button type="submit"
                class="mt-8 w-full bg-slate-700 text-slate-100 rounded-lg p-2 font-medium hover:bg-slate-900">Login</button>
            <small class="block text-center mt-2 text-base">Don't have any account yet? <a href="/register"
                    class="underline">register here</a></small>
        </form>
    </main>
</body>

</html>
