@php
$current_series = config('products')    
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC COMICS | Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
</head>
<body>
    {{-- Header --}}
   @include('includes.header')

   {{-- Jumbo --}}
   <section class="jumbo"></section>

   {{-- Main --}}
    <main> 
        <div class="container py-5">
            {{-- Titolo --}}
            <div class="title-curr-ser">
                <a href="" class="text-uppercase">Current Series</a>
            </div>
            {{-- Card --}}
            <div class="row">
                @forelse ($current_series as $comic)
                <div class="col-2">
                    <div class="card" role="button">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                          <h6 class="card-title text-uppercase">{{ $comic['series'] }}</h6>
                        </div>
                      </div>
                </div>
                @empty
                <p>Non risultano fumetti disponibili</p>
                @endforelse
            </div>
        </div>
    </main>
   {{-- Footer --}}
   @include('includes.footer')
  
</body>
</html>