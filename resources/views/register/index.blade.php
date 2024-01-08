<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 min-h-screen flex flex-col justify-center">
    <h2 class="text-2xl font-bold tracking-wide text-center">Registration Form</h2>
    <main class="flex flex-col items-center justify-center mt-10">
        <form action="/register" method="post" class="max-w-xl flex flex-col w-full">
            @csrf
            <div class="flex flex-col">
                <label for="name" class="font-medium text-slate-700">Name</label>
                <input type="text" name="name" class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none"
                    value="{{ old('name') }}" required />
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="username" class="font-medium text-slate-700">Username</label>
                <input type="text" name="username"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" value="{{ old('username') }}" required />
                @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email" class="font-medium text-slate-700">Email</label>
                <input type="email" name="email"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" value="{{ old('email') }}" required />
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mt-2">
                <label for="password" class="font-medium text-slate-700">Password</label>
                <input type="password" name="password"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" required />
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="mt-8 w-full bg-slate-700 text-slate-100 rounded-lg p-2 font-medium hover:bg-slate-900">Register</button>
            <small class="block text-center mt-2 text-base">Already have an account? <a href="/login"
                    class="underline">login here</a></small>
        </form>
    </main> 
</body>
</html>
