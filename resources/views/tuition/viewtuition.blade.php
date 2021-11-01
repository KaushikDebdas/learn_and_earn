@extends('welcome')

@section('content')

<!--  -->
<section>
    <div class="container group-study mt-5">
      <h2>Post For <span>Tutor</span></h2>
      <div class="row mt-5">
        <div class="col-md-4">
          <!-- Filter Tutor -->
          <h3>Filter Tutor</h3>
          <form action="#" method="post">
            <div class="form-group">
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Course</label>
              <select class="form-control" id="exampleFormControlSelect1" name="co">
                <option value="%">--Select One--</option>
                <option value=""></option>
              </select>
              <br>
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Preference
                Gender</label>
              <select class="form-control" id="exampleFormControlSelect1" name="ge">
                <option value="%">--Select One--</option>
                <option value="%">Any</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <br>
              <label for="exampleFormControlSelect1" style="font-size: 17px;">Tuition
                Type</label>
              <select class="form-control" id="exampleFormControlSelect1" name="ty">
                <option value="%">--Select One--</option>
                <option value="A">Topic Wise</option>
                <option value="B"></option>
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
        <div class="col-md-7 offset-1">
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title">Tutor Needed</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title">Tutor Needed</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title">Tutor Needed</h3>
              <p>Departments: CSE</p>
              <p class="card-text">Topic Description :</p>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <p> Interested Members:</p>
              <p>Start Time:</p>
              <p>End Time:</p>
              <a href="#" class="btn submitbtn">Enroll</a>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <h3 class="card-title">Tutor Needed</h3>
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
      </div>

    </div>

  </section>
  <!-- End -->


@endsection