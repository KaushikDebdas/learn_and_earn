@extends('welcome')

@section('content')

{{-- Personal Information Start --}}
<section class="mt-5">
    <div class="container profile">
        <div class="row">
            <div class="col-md-4">
              <h3 class="menu-title">My Dashboard</h3>
                <div class="card  live-chat-menu" >
                  <div class="card-body livechat-menu-items">  
                    <nav class="navbar navbar-expand navbar-light">
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav flex-column">
                          <a class="nav-link active livechat-link" href="{{ route('personalinformation') }}">Personal Information</a>
                          <a class="nav-link" href="{{ URL::to('undermaintanance') }}">Requested posts</a>
                          <a class="nav-link" href="{{ route('confirmtuition') }}">Confirmed Tuitions</a>
                          <a class="nav-link" href="{{ URL::to('undermaintanance') }}">As a Tutor</a>
                        </div>
                      </div>
                    </nav>
                 </div>
                </div>

            </div>
            <div class="col-md-5 mt-5 " style="">
                <div class="card bg-white ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="profile-img" src="{{  Session::get('image') }} ">
                            </div>
                            <div class="col-md-7">
                              <ul class="profile-details">
                                  <li>Name : {{  Session::get('username') }}</li>
                                  <li>ID : {{  Session::get('id') }}</li>
                                  <li>Phone Number: {{  Session::get('phone') }}</li>
                                  <li>Department : CSE</li>
                                  <li>START DATE : {{  Session::get('sdate') }}</li>
                                  <li>BALANCE : 50,000 TK</li>
                                  <li>TUTOR RATING : 4.5</li>
                                  <li>TAKEN TUITION COUNT :</li>
                                  <li>GIVEN TUITION COUNT :</li>
                              </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
{{-- Personal Information End --}}

@endsection