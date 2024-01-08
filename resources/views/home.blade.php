@extends('layouts.main')
@section('container')
    <div class="mx-20">
        <h3 class="text-2xl font-bold">Hallo, {{ auth()->user()->name }}!
        </h3>
    </div>
@endsection
