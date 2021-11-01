@extends('welcome')

@section('content')

<!-- Create Group Study Title -->
<section class="mt-5">
    <div class="container create-group-study">
      <h1>Find suitable group to study accordingly to your need </h1>
      <p>If you are looking for a tutor to help you in your studies then “Learn and Earn” is the perfect platform for
        you. Learn and Earn is giving you
        the opportunity to find quality tutors in budget on your own. To arrange a group study you simply have to do a
        registration first and click
        on the ‘find group study’ option or ‘create group study’ to create. Here you can post by filling necessary
        fields.</p>
    </div>
  </section>

  <!-- Group Study Post Section & Help Desks -->
  <section>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-7">
          <!-- Form itself -->
          <form action="#" method="post">

            <div class="form-group">
              <!-- Select Courses -->
              <label for="exampleFormControlSelect1" class="fw-bold">Select Course</label>
              <select class="form-control mt-3" id="exampleFormControlSelect1" name="courseID">
                <option>--Select One--</option>
                <option value=""></option>
              </select>
            </div>
            <!-- Topic & Details -->
            <div class="form-group">
              <label for="exampleInputdetails" class="fw-bold mt-3">Topic and Details</label>
              <input type="text" class="form-control mt-3" id="exampleInputdetails" aria-describedby="emailHelp"
                placeholder="Details about topic area and others ..." name="details" style="height: 130px;">
            </div>
            <!-- Start/End Time -->
            <div class="form-group">
              <label for="exampleFormControlSelect1" class="fw-bold mt-3">Pick Start Time:</label><br>
              <input class="mt-3" type="datetime-local" name="stime" placeholder="Enter End Date and time" required>
              <br>
              <label for="exampleFormControlSelect1" class="fw-bold mt-3">Pick End Time:</label><br>
              <input class="mt-3" type="datetime-local" name="etime" placeholder="Enter End Date and time" required>
              <button type="addtime" class="btn btn-primary" name="TimeAdd"
                style="background-color: #0c4270; padding: 5px 5px;">+</button>
            </div>
            <br>
            <!-- Button -->
            <button type="submit" class="btn submitbtn">Create Group Study</button>
            <br>
            
          </form>
        </div>

        <!-- Help Desk -->
        <div class="col-md-4 offset-1">
          <h4>Help Desk</h4>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  1. How much people can join group study?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Many as you can.</p>
                </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. What you need to add on the description?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>The place and the required things your groupmates need to know.</p>
                </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. Can I schedule ask for a tutor in group study?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Yes you can. Its optional and its your wish.</p>
                </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. Can I select the place of group study?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> It is not must . But you can mention the place in the description.</p>
                </div>
              </div>
            </div>
            <br>
          </div>
        </div>
        <!-- End Help Desk -->
      </div>
    </div>
  </section>

@endsection