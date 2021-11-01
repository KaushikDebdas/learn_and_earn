@extends('welcome')

@section('content')


<!-- Post For Group Study -->

<section>
  @foreach($item as $row)
    <div class="container group-study mt-5">
      <h2>Post For <span>Group Study</span></h2>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Group Studies</h3>
              <p>Departments: CSE</p>
              <p>Topic Description : </p>
              <p class="card-text">{{ $row->GroupStudyDescription }}</p>
              <p> Interested Members:</p>
              <p>Start Time: {{ $row->GroupStudyStartTime }}</p>
              <p>End Time: {{ $row->GroupStudyEndTime }}</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Group Studies</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Group Studies</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Group Studies</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- End Post For Group Study -->

@endsection