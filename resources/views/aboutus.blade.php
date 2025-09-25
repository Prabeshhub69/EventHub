@extends('mainlayout')

@section('title','AboutUs')

@section ('styles')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4">About EventHub</h1>
        <p class="lead">Connecting People, Creating Experiences</p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Our Mission</h2>
        <p class="mb-4">At EventHub, our mission is simple — to make ticket booking seamless, fast, and enjoyable.
            We aim to connect people with unforgettable events, from concerts and sports to seminars and festivals,
            by providing an easy-to-use platform that ensures hassle-free booking and smooth event entry.</p>

        <h2 class="section-title mt-5">Our Vision</h2>
        <p>We envision a world where attending events is effortless. No long queues, no last-minute confusion —
            just smooth booking, instant e-tickets, and happy memories.
            With innovation and trust, we want to be the most reliable ticket booking platform worldwide.</p>
    </div>
</section>

<!-- Features -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Our Features</h2>
        <div class="row mt-4">
            <div class="col-md-3 icon-box">
                <i class="fa-solid fa-mobile-screen"></i>
                <h5>Instant E-Tickets</h5>
                <p>Get your tickets directly on your phone within seconds after booking.</p>
            </div>
            <div class="col-md-3 icon-box">
                <i class="fa-solid fa-map"></i>
                <h5>Interactive Seat Maps</h5>
                <p>Choose your favorite seats with our smart seating layouts.</p>
            </div>
            <div class="col-md-3 icon-box">
                <i class="fa-solid fa-shield-halved"></i>
                <h5>Secure Payments</h5>
                <p>Enjoy worry-free transactions with trusted and safe payment gateways.</p>
            </div>
            <div class="col-md-3 icon-box">
                <i class="fa-solid fa-bell"></i>
                <h5>Event Reminders</h5>
                <p>Get timely notifications so you never miss out on your booked events.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Why Choose EventHub?</h2>
        <ul class="list-unstyled">
            <li><i class="fa-solid fa-check text-success"></i> Simple and user-friendly interface</li>
            <li><i class="fa-solid fa-check text-success"></i> Wide range of events — concerts, seminars, sports, and
                more</li>
            <li><i class="fa-solid fa-check text-success"></i> 24/7 customer support</li>
            <li><i class="fa-solid fa-check text-success"></i> Trusted by thousands of event-goers</li>
        </ul>
    </div>
</section>

<hr>

<div class="table-container container my-5">
    <h1 class="mb-4 text-center">What we bring to the table...</h1>
    <div class="accordion" id="eventAccordion">

        <!-- Accordion Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Seamless Event Discovery
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#eventAccordion">
                <div class="accordion-body">
                    Easily browse events by category, date, or location. Find events that match your interests in just a
                    few clicks.
                </div>
            </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Secure and Quick Ticket Booking
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#eventAccordion">
                <div class="accordion-body">
                    Book your tickets instantly with safe and reliable payment options. Enjoy a hassle-free checkout
                    experience every time.
                </div>
            </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Real-Time Availability
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#eventAccordion">
                <div class="accordion-body">
                    Check live ticket availability and avoid overselling or disappointment. Stay updated on event
                    capacity in real time.
                </div>
            </div>
        </div>

        <!-- Accordion Item 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Organizer Support
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#eventAccordion">
                <div class="accordion-body">
                    Event organizers can effortlessly manage registrations and track attendance. Our platform provides
                    insights and tools to simplify event management.
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS (needed for accordion to work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<hr>

<!-- Contact Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title">Get In Touch</h2>
        <p>Have questions or need support? We’d love to hear from you.</p>
        <p><i class="fa-solid fa-envelope"></i> support@eventhub.com | <i class="fa-solid fa-phone"></i> +977-9800000000
        </p>
    </div>
</section>

@endsection
</body>

</html>