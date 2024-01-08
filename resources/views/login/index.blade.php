@extends('layouts.main')
@section('container')
    @if (session()->has('success'))
    <small class="block text-center text-lg text-green-500 tracking-wider">
        {{ session('success') }}
    </small>
    @endif
    <h2 class="text-2xl font-bold tracking-wide text-center">Please Login First</h2>
    <main class="flex flex-col items-center justify-center mt-10">
        <form action="" class="max-w-xl flex flex-col w-full">
            <div class="flex flex-col">
                <label for="email" class="font-medium text-slate-700">Email</label>
                <input type="email" name="email"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" />
            </div>
            <div class="flex flex-col mt-2">
                <label for="password" class="font-medium text-slate-700">Password</label>
                <input type="password" name="password"
                    class="text-slate-700 border-slate-900 rounded-lg p-1 focus:outline-none" />
            </div>
            <button type="submit"
                class="mt-8 w-full bg-slate-700 text-slate-100 rounded-lg p-2 font-medium hover:bg-slate-900">Login</button>
            <small class="block text-center mt-2 text-base">Don't have any account yet? <a href="/register"
                    class="underline">register here</a></small>
        </form>
    </main>
@endsection

