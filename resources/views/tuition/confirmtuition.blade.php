@extends('welcome')
@section('title','Confirm Tuition')
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
                              @foreach ($item_post as $row)
                              <p class="time">{{ date('h:ia', strtotime($row->PostDateTime)) }}</p>

                              <ul class="profile-details confirmed_tution_details-inline">
                                  <li>Gender: <span class="data-highlighted">{{ $row->Gender }}</span> </li>
                              </ul>
                              <div class="topic_description">
                                  <h5>Topic Description</h5>
                                  <p>{{ $row->PostDescription }}</p>
                              </div>
                               <ul class="profile-details confirmed_tution_details">
                                  <li>Salary: <span class="data-highlighted">{{ $row->Payment }}</span></li>
                                  <li>Selected Tutor:
                                  <span class="data-highlighted">{{ $row->TutorName }}</span> </li>
                              </ul>
                               <ul class="profile-details confirmed_tution_details-inline">
                                  <li>Start Time:  <span class="data-highlighted">{{ $row->SelectedStartTime }}</span></li>
                                  <li>End Time: <span class="data-highlighted">{{ $row->SelectedEndTime }}</span></li>
                              </ul>
                              <form action="submitbutton" method="post">
                                @csrf
                              <div class="form-group"> 
                                <textarea placeholder="{{ $row->Comment }}" name="Comment"  class="form-control" id="exampleFormControlTextarea1" rows="3" height="30"></textarea>
                              </div>

                             <div class="form-group rating">
                                <select class="form-control" id="exampleFormControlSelect1" name="Rating">
                                  <option value="">{{ $row->Rating }}</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                              </div>
                                <input type="hidden" name="postid" value="{{ $row->ID }}">
                                <input type="submit" class="btn submitbtn" value="Submit">
                            </form>
                              @endforeach
                         
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection