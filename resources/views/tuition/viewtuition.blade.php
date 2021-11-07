@extends('welcome')

@section('content')

<!--  -->
<section>
    <div class="container group-study mt-5">
      <h2 style="text-align:center;">Post For <span>Tutor</span></h2>
      <div class="row mt-5">
        <div class="col-md-4">
          <!-- Filter Tutor -->
          <h3>Filter Tutor</h3>
          <form action="#" method="post">
            <div class="form-group">
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Course</label>
              <select class="form-control" id="exampleFormControlSelect1" name="co">
                <option>--Select One--</option>
                <option value="1">SPL (CSI - 121)</option>
                <option value="2">Elementary Calculus (MATH - 003)</option>
                <option value="3">Digital Logic Design (CSE - 225)</option>
                <option value="4">Physics (PHY - 105)</option>
                <option value="5">Financial Accounting I (ACN - 1205)</option>
                <option value="6">Strategic Marketing (MKT - 4204)</option>
                <option value="7">Engineering Electromagnetics (EEE - 3305)</option>
              </select>
              <br>
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Preference
                Gender</label>
              <select class="form-control" id="exampleFormControlSelect1" name="gen">
                <option value="%">--Select One--</option>
                <option value="Any">Any</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <br>
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Salary</label>
              <input type="number" class="form-control" id="exampleInputPayment" aria-describedby="emailHelp"
                placeholder="Payment" name="payment">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="filter">Find</button>
            <br>
          </form>
        </div>
        <!-- Post For Tutor -->
        
        <div class="col-md-7 offset-1">
          @foreach($item as $row)
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title">TUTOR NEEDED</h3><hr>
              @foreach($subjects as $sub)
                @if ($sub->ID == $row->CourseID)
                <p>Course Name: {{ $sub->CourseName }}</p>
                @endif
              @endforeach
              <p>Topic Description : </p>
              <p class="card-text">{{ $row->PostDescription }}</p>
              <p> Interested Members:</p>
              <p>Start Time: {{ $row->SelectedStartTime }}</p>
              <p>End Time: {{ $row->SelectedEndTime }}</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>

  </section>
  <!-- End -->


@endsection