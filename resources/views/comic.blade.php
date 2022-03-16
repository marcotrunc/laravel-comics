{{-- Main layout --}}
@extends('layouts.main')
{{-- Title --}}
@section('title-section','Superman')
    
{{-- Jumbotron --}}
@section('bg-jumbo')
<section class="jumbo"></section>
@endsection

{{-- Main --}}
@section('content')
<main class="comic">
    {{-- Top section --}}
    <section>

    </section>

    {{-- Main section --}}
    <section>
        <div class="container bg-white py-5">
            <div class="row">
                {{-- Left section --}}
                <div class="col-8 left-section">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="d-flex py-4" >
                        <div class="price  d-flex justify-content-between">
                            <span>U.S Price: 
                                <strong>{{ $comic['price'] }}</strong>
                        </span>
                            <span class="text-uppercase">available</span>
                        </div>
                        <div class="available">
                            <select>
                                <option> Check availability</option>
                                <option value="">True</option>
                                <option value="">False</option>
                            </select>
                        </div>
                    </div>
                    <p> {{ $comic['description'] }} </p>
                </div>

                {{-- Right section --}}
                <div class="col-4 right-section">
                    <figure>
                        <img src="{{ asset('images/adv.jpg') }}"  alt="..." class="img-fluid">
                    </figure>
                </div>
            </div>
           
        </div>
    </section>
     {{-- Bottom Section --}}
     <section class="py-5 bottom-section">
         <div class="container">
             <div class=" row justify-content-between">
                <div class="col-6">
                     <div class="left-table pl-100px">
                         <h4>Talent</h4>
                         <table>
                             <tr>
                                 <td class="d-flex"><h6>Art by:</h6></td>
                                 <td > 
                                         @foreach ($comic['artists'] as $index => $artist)
                                             <span>{{$artist}}</span>
                                             @if ($index < count($comic['artists']) -1 )
                                                 ,
                                             @endif
                                         @endforeach
                                 </td>
                             </tr>
                             <tr>
                                <td class="d-flex"><h6>Written by:</h6></td>
                                <td>
                                    @foreach ($comic['writers'] as $index => $writer)
                                    <span>{{$writer}}</span>
                                    @if ($index < count($comic['writers']) -1 )
                                        ,
                                    @endif
                                @endforeach
                                </td>
                            </tr>
                            </table>
                     </div>
                </div>
                <div class="col-6">
                    <div class="right-table pr-100px">
                        <h4>Specs</h4>
                        <table>
                            <tr>
                                <td class="d-flex"><h6>Series:</h6></td>
                                <td>{{ $comic['series'] }}</td>
                            </tr>
                            <tr>
                               <td class="d-flex"><h6>U.S. Price:</h6></td>
                               <td><span class="text-dark">{{ $comic['price'] }}</span></td>
                           </tr>
                            <tr>
                               <td class="d-flex"><h6>On Sale Date:</h6></td>
                               <td><span class="text-dark">{{ $comic['sale_date'] }}</span></td>
                           </tr>
                        </table>
                    </div>
                </div>
            </div>
         </div>
        </section>
</main>
@endsection