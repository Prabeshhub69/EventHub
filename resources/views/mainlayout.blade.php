<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"> --}}
  <link rel="stylesheet" href="{{ asset('css/mainlayout.css')}}">
  @yield('styles')
  <title>@yield('title', 'MyWebsite')</title>
</head>

<body>
  <header>
    <a  href="{{route('home') }}">    
      <img src="{{ asset('images/logo1.png') }}">
    </a>
    <div class="nav-links">
      <a href="{{ route('home') }}">Home</a>
      
      <a href="{{ route('myevents') }}">MyEvents</a>
      <a href="{{ route('edit') }}">Profile</a>
      <a href="{{ route('showaboutus') }}">About Us</a>
    </div>

    <div class="login-links">
      <a href="{{ route('login') }}">Login</a>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <div class="footer container-fluid">

      <div class="col-md-4">
          <div class="logo">
            <img src="{{ asset('images/logowhite.png') }}">
          </div>
      </div>
           
      <div class="information col-md-4">
        <div class="what-we">
          <p>What we do</p>
          <a href="#">Features</a>
          <a href="#">Blog</a>
          <a href="{{ route('showaboutus') }}">About Us</a>
          <a href="#">Help Centers</a>
        </div>
        <div class="quick-links">
          <p>Quick Links</p>
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('eventscard.search') }}">Available Events</a>
          <a href="{{ route('edit') }}">Profile</a>
          <a href="{{ route('edit') }}">Contact Us</a>
        </div>
      </div>

      <div class="copyright col-md-4">
        <div class="link">
            <a href="#">
              <i class="linkedin brands fab fa-linkedin fa-lg" target="blank"></i>
            </a>
            <a href="#">
              <i class="facebook brands fab fa-facebook fa-lg" target="blank"></i>
            </a>
            <a href="#">
              <i class="youtube brands fab fa-youtube fa-lg" target="blank"></i>
            </a>
            <a href="#">
              <i class="twitter brands fab fa-x-twitter fa-lg" target="blank"></i>
            </a>
            <a href="#">
              <i class=" whatsapp brands fab fa-whatsapp fa-lg" target="blank"></i>
            </a>
          </div>
          
        <div class="copyright-eventhub">
          <p>© Copyright EventHub All Rights Reserved</p>
          <p>Designed by Prabesh</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>