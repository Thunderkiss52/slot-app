@extends('layouts.app')

@section('content')
    <h1 class="text-white">Страница: {{ $slug ?? 'Не определён' }}</h1>
    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
@endsection
