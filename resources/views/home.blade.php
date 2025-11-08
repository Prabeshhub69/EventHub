@extends('mainlayout')

@section('title', 'EventHub')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css')}}">
@endsection

@section('content')
<div class="hero-container container">
    <div class="hero-section">
        <img src="{{ asset('images/herosection3.png') }}" class="hero-image" style="width:100%">
    </div>
    <div class="hero-text">
        <h1>Connecting People, Creating Experience</h2>
            <p>Join a community where ideas meet opportunities — discover events tailored for you.</p>
    </div>
    <div class="hero-text2">
        <a href="{{ route('eventscard.search') }}">Event Tickets</a>
    </div>
</div>

<div class="second-container container-fluid">
    <div class="container">
        <div class="col-md-6">
            <h1>Your Gateway to Every Event</h1>
            <p>For years, we have been connecting people with the moments that matter most. From electrifying concerts
                to insightful business seminars, our system ensures a smooth and secure ticket booking experience. We
                take pride in simplifying the journey from browsing events to securing your spot. With us,
                every event begins with confidence.
            </p>
        </div>
        <div class="cold-md-6">
            <img src="{{ asset('images/stickynote.png') }}">
        </div>
    </div>
</div>

<div class="third-container container-fluid">
    <div class="col-md-4">
        <img src="{{ asset('images/guitaristpng.png') }}">
    </div>
    <div class="col-md-2"></div>
    <div class="text col-md-4">
        <h3>Plan it. Book it. Live it.</h3>
        <p>No queues, no stress — just seamless ticket booking.
            Discover concerts, movies, and events near you.
            Your seat,b  your experience, just a tap away. From live music and theater to workshops and exclusive shows, we bring the world of entertainment to your
            fingertips.</p>
    </div>
</div>

<div class="review-container container">
    <div class="review-title">
        <p>Clients Feedback About Us</p>
        <h3> See Those Lovely Words From Clients</h3>
    </div>
    <div class="reviews">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">

                <!-- Item 1 -->
                <div class="carousel-item active">
                    <div class="profile-dp text-center">
                        <img src="{{ asset('images/profiledp/jamal.jpg') }}">
                        <div class="person">
                            <h5>Jamal Ramirez</h5>
                            <p class="from">From Seminar</p>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>“Smooth checkout and instant e-ticket delivery. The seating map made choosing seats easy and
                            the event reminders saved the day. Highly recommend!”</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="carousel-item">
                    <div class="profile-dp text-center">
                        <img src="{{ asset('images/profiledp/tariq.jpeg') }}">
                        <div class="person">
                            <h5>Tariq Khan</h5>
                            <p class="from">From Concert</p>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>“Booking was super easy and I loved the digital tickets. No hassle at the gate!”</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="profile-dp text-center">
                        <img src="{{ asset('images/profiledp/amanda.jpeg') }}">
                        <div class="person">
                            <h5>Amanda Hathaway</h5>
                            <p class="from">From Sport</p>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>“Booking was super easy and I loved the digital tickets. No hassle at the gate!”</p>
                    </div>
                </div>


            </div>

            <!-- Custom Controls Below -->
            <div class="carousel-controls">
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>


    </div>
</div>

<div class="gallery container">

</div>
@endsection