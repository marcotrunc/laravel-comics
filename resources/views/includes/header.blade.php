@php
    $nav_main_menu = config('nav_main')   
@endphp
<header>
    <section id="top-header">
        <div class="container">
            <div class="d-flex justify-content-end py-1">
                <span>DC Power Visa</span>
                <a href="#">Additional Dc Sities</a>
            </div>
        </div>
    </section>
    <section id="main-header">
        <div class="container">
            <div class="row  justify-content-between align-items-center">
                <div class="col-1 py-4">
                    <div class="logo-container">
                        <img src="{{ asset('images/dc-logo.png') }}" alt="" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-8 h-100">
                    <nav>
                        <ul class="d-flex justify-content-between">
                            @foreach ($nav_main_menu as $menu)
                            <li><a href="{{route($menu['route_name'])}}">{{$menu['text']}}</a></li>    
                            @endforeach
                        </ul>    
                    </nav>
                </div>
                <div class="col-2">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </section>
</header>