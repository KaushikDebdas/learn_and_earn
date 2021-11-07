@extends('welcome')

@section('content')

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
                          <a class="nav-link" href="{{ route('personalinformation') }}">Personal Information</a>
                          <a class="nav-link" href="{{ route('requestedpost') }}">Requested posts</a>
                          <a class="nav-link active confirmed_tution-link" href="{{ route('confirmtuition') }}">Confirmed Tuitions</a>
                          <a class="nav-link" href="{{ route('astutor') }}">As a Tutor</a>
                        </div>
                      </div>
                    </nav>
                 </div>
                </div>

            </div>
            <div class="col-md-7 mt-5 " style="margin-left: 5%;">
                <div class="card bg-white ">
                    <div class="card-body detailed_confirmed_tution">
                        <div class="row">
                            <div class="col-md-12">
                            <p class="time">11:00AM</p>
                              <ul class="profile-details confirmed_tution_details-inline">
                                  <li>DEPARTMENT :<span class="data-highlighted">CSE</span></li>
                                  <li>Gender :<span class="data-highlighted">Male</span> </li>
                              </ul>
                              <div class="topic_description">
                                  <h5>Topic Description</h5>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                              </div>
                               <ul class="profile-details confirmed_tution_details">
                                  <li>Salary :  <span class="data-highlighted">5000 Tk</span></li>
                                  <li>Selected Tutor :
                                  <span class="data-highlighted"> Md. Zahid Hossain</span> </li>
                                  <li>Tution Type : <span class="data-highlighted">Topic Wise</span></li>
                              </ul>
                               <ul class="profile-details confirmed_tution_details-inline">
                                  <li>Start Time :  <span class="data-highlighted">05-04--2021 , 10:00 PM</span></li>
                                  <li>End Time : <span class="data-highlighted">08-04--2021 , 10:00 PM</span></li>
                              </ul>

                              <div class="form-group"> 
                                <textarea placeholder="Write revire here..." class="form-control" id="exampleFormControlTextarea1" rows="3" height="30"></textarea>
                              </div>

                             <div class="form-group rating">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Overall Rating</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                               <button type="submit" class="btn submitbtn">Submit</button>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection