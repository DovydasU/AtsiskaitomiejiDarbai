{{-- <!-- resources/views/trip/show.blade.php -->

<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal">
    Show Trip
</button>

<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel">Trip Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>{{ $trip->name }}</h1>
                <p>Location: {{ $trip->location }}</p>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WoOx </title>

    {{-- @vite(['resources/scss/style.scss']) --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-woox-travel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <div class="more-info reservation-info">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <div
                            style="width: 1300px; height: 600px; border-radius: 23px; display: block; margin: 0 auto; overflow: hidden;">
                            <img src="/images/trip/tripImg1.jpg" alt="Trip Image"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="reservation-form" name="gs">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4><em>Pasirinktos</em> Kelionės <em>Informacija</em></h4>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Name" class="form-label">Kelionės Šalis</label>
                                    <input type="text" name="Name" class="Name" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Kelionės Miestas</label>
                                    <input type="text" name="Name" class="Name" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="chooseGuests" class="form-label">Vietos Kelionėje</label>
                                    <input type="text" name="Number" class="Number" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Likusios Vietos</label>
                                    <input type="text" name="Number" class="Number" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Kelionės pradžia</label>
                                    <input type="date" name="date" class="date" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="Number" class="form-label">Kelionės pabaiga</label>
                                    <input type="date" name="date" class="date" readonly value="John Doe">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Number" class="form-label">Kelionės Aprašymas</label>
                                    <textarea name="description" class="form-control" readonly rows="5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</textarea>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="Number" class="form-label">Kontaktai</label>
                                    <textarea name="description" class="form-control" readonly rows="5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</textarea>
                                </fieldset>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <button type="button" id="buttonGoBack" class="main-button"
                                    onclick="window.location.href='{{ route('trip.index') }}'">Atgal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
