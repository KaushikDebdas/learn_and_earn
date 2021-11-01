<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main CSS -->
  <link rel="shortcut icon" href="{{ asset('frontend/images/logo/brain 1.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid main-header">
        <a class="navLogo" href="{{ URL::to('/') }}"><img src="{{ asset('frontend/images/logo/brain 1.png') }}" alt=""><span class="ms-3">Learn & Earn</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ URL::to('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            @if(Session::has('username'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Group Study</a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="{{ route('creategroupstudy') }}">Create Group Study</a></li>
                <li><a class="dropdown-item" href="{{ route('viewgroupstudy') }}">Post Group Study</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Tuition</a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="{{ route('createtuition') }}">Find Tutor</a></li>
                <li><a class="dropdown-item" href="{{ route('viewtuition') }}">Find Tutor's Post</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('notes') }}">Notes</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="#subscribe">Contact</a>
            </li>
            @if(!Session::has('username'))
            <li class=" logInBtn">
              <a href="{{ URL::to('login') }}" class="logIn">Login</a>
            </li>
            <li class=" signUpBtn">
              <a href="{{ URL::to('signup') }}" class="signUp">Sign up</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="upload_images/{{ Session::get('image') }}" alt="{{ Session::get('username') }}"></a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="{{ route('personalinformation') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('updateprofile') }}">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('userlogout') }}">Logout</a></li>
                  </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header -->


  {{-- MAIN BODY --}}
  @yield('content')  

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted mt-5 footer" id="subscribe">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        {{-- <span>Get connected with us on social networks:</span> --}}
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        {{-- <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div> --}}
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/images/logo/brain 1.png') }}" alt="logo">Learn & Earn</a>
            </h6>
            <h6>United International University</h6>
            <p>100 feet road , Madani evenue
              Vatara thana , Dhaka 1212</p>
            <p>Phone : +880175-7921768</p>
            <p>Email : samplemail@gmail.com</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Quick Links
            </h6>
            <p>
              <a href="#!" class="text-reset">Latest Events</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Terms & Conditions</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-reset">About</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 0175-7921768</p>
            <p><i class="fas fa-print me-3"></i> 0168-5474608</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#">All rights reserverd by kaushikdebdas27</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>