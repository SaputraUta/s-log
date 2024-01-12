<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200 min-h-screen flex flex-col justify-center gap-12">
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center text-slate-700">Registration Form</h2>
    <main class="flex flex-col items-center justify-center">
        <form action="/register" method="post" class="max-w-xl flex flex-col w-3/4 gap-2">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="name" class="font-medium text-slate-700 sm:text-lg md:text-xl">Name</label>
                <input type="text" name="name"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none"
                    value="{{ old('name') }}" required />
                @error('name')
                    <p class="text-red-500 sm:text-lg md:text-xl">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="username" class="font-medium text-slate-700 sm:text-lg md:text-xl">Username</label>
                <input type="text" name="username"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none"
                    value="{{ old('username') }}" required />
                @error('username')
                    <p class="text-red-500 sm:text-lg md:text-xl">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-1">
                <label for="email" class="font-medium text-slate-700 sm:text-lg md:text-xl">Email</label>
                <input type="email" name="email"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none"
                    value="{{ old('email') }}" required />
                @error('email')
                    <p class="text-red-500 sm:text-lg md:text-xl">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mt-2 gap-1">
                <label for="password" class="font-medium text-slate-700 sm:text-lg md:text-xl">Password</label>
                <input type="password" name="password"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" required />
                @error('password')
                    <p class="text-red-500 sm:text-lg md:text-xl">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="sm:text-lg md:text-xl mt-8 w-full bg-slate-700 text-slate-100 rounded-lg p-2 font-bold hover:bg-slate-900">Register</button>
        </form>
    </main>
    <small class="text-base sm:text-lg md:text-xl block text-center mt-2">Already have an account? <a href="/login" class="underline">login
            here</a></small>
</body>

</html>
