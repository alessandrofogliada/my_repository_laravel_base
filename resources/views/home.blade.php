{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>{{ $title }}</h1>
    <img src="{{ Vite::asset('resources/img/img sqaudra24_25.webp') }}" alt="" class="img-fluid">
    <p>
        {{ $text }}
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
