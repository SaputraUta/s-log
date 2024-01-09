@extends('dashboard.layouts.main')
@section('container')
    <div class="mx-20 mt-16">
        <h1 class="text-4xl font-bold tracking-wide text-slate-700">Hello, {{ auth()->user()->name }}!</h1>
    </div>
@endsection
