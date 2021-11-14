@extends('welcome')

@section('title','Find All Group')

@section('content')


    <!-- Post For Group Study -->

    <section>

        <div class="container group-study mt-5">
            <h2 style="text-align:center;">Post For <span>Group Study</span></h2>
            <div class="row">
                @foreach ($item as $row)
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">GROUP STUDIES</h3><hr>
                                @foreach ($subjects as $sub)
                                    @if ($sub->ID == $row->CourseID)
                                        <p>Course Name: <span>{{ $sub->CourseName }}</span></p>
                                    @endif
                                @endforeach
                                <p>Topic Description : </p>
                                <p class="card-text">{{ $row->GroupStudyDescription }}</p>
                                <p>Interested Members: <span class="data-highlighted">{{ $row->InterestedStudents }}</span> </p>
                                <p>Start Time: {{ date('M j, Y h:ia', strtotime($row->GroupStudyStartTime)) }}</p>
                                <p>End Time: {{ date('M j, Y h:ia', strtotime($row->GroupStudyEndTime)) }}</p>
                                <form action="enrollgroupstudy" method="post">
                                    @csrf
                                    <input type="hidden" name="groupstudyid" value="{{ $row->ID }}">
                                    <input type="submit" class="btn submitbtn" value="Enroll">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Post For Group Study -->

@endsection
