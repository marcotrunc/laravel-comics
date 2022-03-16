@php
$current_series = config('products')    
@endphp

{{-- Extends --}}
@extends('layouts.main')

{{-- title-section --}}
@section('title-section','COMICS')


{{-- Jumbotron --}}
@section('bg-jumbo')
<section class="jumbo"></section>
@endsection

{{-- Content --}}
@section('content')
<main class="comics">
     <div class="container py-5">
        {{-- Titolo --}}
        <div class="title-curr-ser">
            <a href="" class="text-uppercase">Current Series</a>
        </div>
        {{-- Card --}}
        <div class="row">
            @forelse ($current_series as $index => $comic)
            <div class="col-2">
                <a href="{{ route('comic',['id'=> $index]) }}">
                    <div class="card" role="button">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                          <h6 class="card-title text-uppercase">{{ $comic['series'] }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <p>Non risultano fumetti disponibili</p>
            @endforelse
        </div>
    </div>
</main>
@endsection