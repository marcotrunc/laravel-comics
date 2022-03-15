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
   {{-- Footer --}}
   <section id="top-footer"> 
       <div class="container py-5 d-flex justify-content-center">
           <div class="d-flex justify-content-between">
                <div class="card-merch d-flex align-items-center">
                    <figure>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                    </figure>   
                    <div class="capt">
                        <h6 class="text-uppercase mx-3">Digital Comics</h6>
                    </div>
                </div>
            </div>
           <div class="d-flex justify-content-between">
                <div class="card-merch d-flex align-items-center">
                    <figure>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                    </figure>   
                    <div class="capt">
                        <h6 class="text-uppercase mx-3">Digital Comics</h6>
                    </div>
                </div>
            </div>
           <div class="d-flex justify-content-between">
                <div class="card-merch d-flex align-items-center">
                    <figure>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                    </figure>   
                    <div class="capt">
                        <h6 class="text-uppercase mx-3">Digital Comics</h6>
                    </div>
                </div>
            </div>
           <div class="d-flex justify-content-between">
                <div class="card-merch d-flex align-items-center">
                    <figure>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                    </figure>   
                    <div class="capt">
                        <h6 class="text-uppercase mx-3">Digital Comics</h6>
                    </div>
                </div>
            </div>
           <div class="d-flex justify-content-between">
                <div class="card-merch d-flex align-items-center">
                    <figure>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="img-fluid">
                    </figure>   
                    <div class="capt">
                        <h6 class="text-uppercase mx-3">Digital Comics</h6>
                    </div>
                </div>
            </div>
       </div>  
    </section>
        <section id="main-footer"></section>
        <section id="bottom-footer"></section>
</body>
</html>