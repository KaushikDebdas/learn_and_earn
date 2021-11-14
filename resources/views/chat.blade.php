@extends('welcome')

@section('content')

<!-- UNDER MAINTANCE -->
<div class="container1">
    <img src="{{ asset('frontend/images/logo.png') }}" alt="" class="logo">

    <div class="content">
        <h3>This Page Is Under Maintenance</h3>
        <h1>We're <span>Launching</span> Soon</h1>

        <div class="launch-time">
            <div>
                <p id="days">00</p>
                <span>Days</span>
            </div>
            <div>
                <p id="hours">00</p>
                <span>Hours</span>
            </div>
            <div>
                <p id="minutes">00</p>
                <span>Minutes</span>
            </div>
            <div>
                <p id="seconds">00</p>
                <span>Seconds</span>
            </div>
        </div>

        <button type="button">Learn More <img src="{{ asset('frontend/images/triangle.png') }}" alt=""></button>

        <img class="rocket" src="{{ asset('frontend/images/rocket.png') }}" alt="">
    </div>
</div>
<!-- END UNDER MAINTANCE -->

<script src="{{ asset('frontend/js/script.js') }}"></script>
@endsection