@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <section id="section-1">
        <div class="content-slider">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
            <input type="radio" id="banner2" class="sec-1-input" name="banner">
            <input type="radio" id="banner3" class="sec-1-input" name="banner">
            <input type="radio" id="banner4" class="sec-1-input" name="banner">
            <div class="slider">
                <div id="top-banner-1" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
                            <h1>Caribbean</h1>
                            <div class="border-button"><a href="{{ route('about') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>44.48 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>275.400 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>$946.000</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-2" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
                            <h1>Switzerland</h1>
                            <div class="border-button"><a href="{{ route('about') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>8.66 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>41.290 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>$1.100.200</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-3" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
                            <h1>France</h1>
                            <div class="border-button"><a href="{{ route('about') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>67.41 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>551.500 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>$425.600</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="top-banner-4" class="banner">
                    <div class="banner-inner-wrapper header-text">
                        <div class="main-caption">
                            <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
                            <h1>Thailand</h1>
                            <div class="border-button"><a href="{{ route('about') }}">Go There</a></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-user"></i>
                                                <h4><span>Population:</span><br>69.86 M</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-globe"></i>
                                                <h4><span>Territory:</span><br>513.120 KM<em>2</em></h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-home"></i>
                                                <h4><span>AVG Price:</span><br>$165.450</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="controls">
                    <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">1</span></label>
                    <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">2</span></label>
                    <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">3</span></label>
                    <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span
                            class="text">4</span></label>
                </div>
            </nav>
        </div>
    </section>

    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2>Visit One Of Our Countries Now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="items">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($trip_list as $item)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="image">
                                                <img src="{{ asset('images/trip/' . $item->image) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="right-content">
                                                <h4>{{ $item->name }}</h4>
                                                <span>{{ $item->location }}</span>
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                                <p> <h4>Description:</h4>{{ $item->description }}</p>
                                                <ul class="info">
                                                    <li><i class="fa fa-calendar"></i> {{ $item->start }}</li>
                                                    <li><i class="fa fa-users"></i> {{ $item->space }}</li>
                                                    <li><i class="fa fa-usd"></i> {{ $item->price }}</li>
                                                </ul>
                                                <div class="text-button">
                                                    <a href="">Read More? <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    @if ($trip_list->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $trip_list->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                                    @endif
                        
                                    @for ($i = 1; $i <= $trip_list->lastPage(); $i++)
                                        <li class="page-item {{ ($i == $trip_list->currentPage()) ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $trip_list->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                        
                                    @if ($trip_list->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $trip_list->nextPageUrl() }}" rel="next">&raquo;</a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.add')
    <script>
        function bannerSwitcher() {
            next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length) next.prop('checked', true);
            else $('.sec-1-input').first().prop('checked', true);
        }

        var bannerTimer = setInterval(bannerSwitcher, 5000);

        // $('nav .controls label').click(function() {
        //     clearInterval(bannerTimer);
        //     bannerTimer = setInterval(bannerSwitcher, 5000)
        // });
    </script>
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection
