@extends('welcome')

@section('content')

    <section class="mt-5">
        <div class="container profile">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="menu-title">My Dashboard</h3>
                    <div class="card  live-chat-menu">
                        <div class="card-body livechat-menu-items">
                            <nav class="navbar navbar-expand navbar-light">
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav flex-column">
                                        <a class="nav-link" href="{{ route('personalinformation') }}">Personal
                                            Information</a>
                                        <a class="nav-link active confirmed_tution-link"
                                            href="{{ route('requestedpost') }}">Requested posts</a>
                                        <a class="nav-link" href="{{ route('confirmtuition') }}">Confirmed
                                            Tuitions</a>
                                        <a class="nav-link" href="{{ URL::to('undermaintanance') }}">As a Tutor</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="col-md-7 mt-5 group-study" style="margin-left: 5%;">
                    <!--START My Group Studies Post -->
                    @foreach ($item as $row)
                        <div class="card mt-5">
                            <div class="card-body">
                                <h2 class="card-title" style="text-align:center;"><span>GROUP STUDY</span></h2>
                                <hr><br>
                                @foreach ($subjects as $sub)
                                    @if ($sub->ID == $row->CourseID)
                                        <p>Course Name: {{ $sub->CourseName }}</p>
                                    @endif
                                @endforeach
                                <p>Topic Description : </p>
                                <p class="card-text">{{ $row->GroupStudyDescription }}</p>
                                <p> Interested Members:</p>
                                <p>Start Time: {{ $row->GroupStudyStartTime }}</p>
                                <p>End Time: {{ $row->GroupStudyEndTime }}</p>
                                <a href="#" class="btn submitbtn">Enroll</a>
                            </div>
                        </div>
                    @endforeach
                    <!--END My Group Studies Post -->
                </div>
            </div>
        </div>

    </section>

@endsection
