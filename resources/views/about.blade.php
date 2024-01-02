@extends('layouts.main')
@section('container')
    <div class="mx-20">
        <h3 class="text-2xl font-bold">About me</h3>
        <div class="flex justify-between w-fit gap-5 mt-5">
            <h3>{{ $name }}</h3>
            <p>{{ $email }}</p>
        </div>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="300">
    </div>
@endsection
