@extends('layouts.base')

@section('title', 'category')

@section('content')


    <div class="visit-country">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2>{{ $category->name }}</h2>
                        <p>{{ $categories }}</p>
                        @foreach ($categories as $item)
                            <a href="{{ route('category.show', $item) }}">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="items">
                        <div class="row">
                            <div class="col-lg-12">
                                {{$category->trips}}
                                @foreach($category->trips as $item)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="image">
                                                <img src="{{ $item->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="right-content">
                                                <h4>{{ $item->name }}</h4>
                                                <span>{{ $item->location }}</span>
                                                <div class="main-button">
                                                    <a href="{{ route('about') }}">Explore More</a>
                                                </div>
                                                <p>{{ $item->description }}</p>
                                                <p>{{ $item->user }}</p>
                                                <p>{{ $item->category }}</p>
                                                <ul class="info">
                                                    <li><i class="fa fa-calendar"></i> {{ $item->start }}</li>
                                                    <li><i class="fa fa-users"></i> {{ $item->space }}</li>
                                                    <li><i class="fa fa-usd"></i> {{ $item->price }}</li>
                                                </ul>
                                                <div class="text-button">
                                                    <a href="{{ route('about') }}">Need Directions ? <i
                                                            class="fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-bar-map">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                                        width="100%" height="550px" frameborder="0"
                                        style="border:0; border-radius: 23px; " allowfullscreen=""></iframe>
                                </div>
                            </div>
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

        $('nav .controls label').click(function() {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000)
        });
    </script>
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection
