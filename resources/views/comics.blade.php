@extends("layouts.master")


@php
    // dd(config('comics'))
    $comics = config('comics');
@endphp

@section("contenuto")
    <h3>CURRENT SERIES</h3>
    {{-- GRID --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

        @foreach ($comics as $comic)
            <div class="col">
                <x-card>
                    <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
                    <x-slot:title>{{ $comic['title'] }}</x-slot:title>
                    <x-slot:type>{{ $comic['type'] }}</x-slot:type>
                    <x-slot:title>{{ $comic['title'] }}</x-slot:title>
                    <x-slot:series>{{ $comic['series'] }}</x-slot:series>
                    <x-slot:price>{{ $comic['price'] }}</x-slot:price>
                </x-card>
            </div>
        @endforeach
    </div>
@endsection