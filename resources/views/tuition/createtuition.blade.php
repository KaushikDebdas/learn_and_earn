@extends('welcome')
@section('title','Find Tutor')
@section('content')

<!-- Create Post Title -->
<section class="mt-5">
    <div class="container create-group-study">
      <h1>Find suitable tutor accordingly to your weakness </h1>
      <p>If you are looking for a tutor to help you in your studies then “Learn and Earn” is the perfect platform for
        you. Learn and Earn is giving you
        the opportunity to find quality tutors in budget on your own. To find a tutor you simply have to do a
        registration first and click on the
        ‘find a tutor’ option of ‘tuition arrangement’. Here you can post for a tutor by filling necessary fields.</p>
    </div>
  </section>
  <!-- End Create Post Title -->

  <!-- Group Study Post Section & Help Desks -->
  <section class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <!-- Form itself -->
          <form action="insert" method="post">
            {{csrf_field()}}
            <div class="form-group">
            <!-- Select Courses -->
               <label class="fw-bold mt-3" for="exampleFormControlSelect1">Select Course</label> 
              <select class="form-control" id="exampleFormControlSelect1" name="courseID">
                <option>--Select One--</option>
                <option value="1">SPL (CSI - 121)</option>
                <option value="2">Elementary Calculus (MATH - 003)</option>
                <option value="3">Digital Logic Design (CSE - 225)</option>
                <option value="4">Physics (PHY - 105)</option>
                <option value="5">Financial Accounting I (ACN - 1205)</option>
                <option value="6">Strategic Marketing (MKT - 4204)</option>
                <option value="7">Engineering Electromagnetics (EEE - 3305)</option>
              </select>
              </select>
            </div>
            <!-- Topic & Details -->
            <div class="form-group">
              <label for="exampleInputdetails" class="fw-bold mt-3">Topic and Details</label>
              <input type="text" class="form-control mt-3" id="exampleInputdetails" aria-describedby="emailHelp"
                placeholder="Details about topic area and others ..." name="details" style="height: 130px;">
            </div>
            <!-- Payment Ammount -->
            <div class="form-group">
              <label for="exampleInputPayment" class="fw-bold mt-3">Payment</label>
              <input type="number" class="form-control mt-3" id="exampleInputPayment" aria-describedby="emailHelp"
                placeholder="Enter Payment Amount" name="payment">
            </div>
            <!-- Gender Selection -->
            <div class="form-group">
              <label for="exampleFormControlSelect1" class="fw-bold mt-3">Select Tutor Gender</label>
              <select class="form-control mt-3" id="exampleFormControlSelect1" name="gender">
                <option value="">-- Select One --</option>
                <option value="Any">Any</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <!-- Start/End Time -->
            <div class="form-group">
              <label for="exampleFormControlSelect1" class="fw-bold mt-3">Pick Start Time:</label><br>
              <input class="mt-3" type="datetime-local" name="stime" placeholder="Enter End Date and time" required>
              <br>
              <label for="exampleFormControlSelect1" class="fw-bold mt-3">Pick End Time : </label><br>
              <input class="mt-3" type="datetime-local" name="etime" placeholder="Enter End Date and time" required>
            </div>
            <br>
            <!-- Button Add -->
            <button type="submit" class="btn submitbtn" name="tuitionpost">POST</button>
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
                  1. How does the topic wise option work?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>You can select a topic in which you want to study and the payment method will be
                    applied according to the topic you selected.</p>
                </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. Can I schedule a session with a tutor?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Yes you can. You can give your suitable time schedule by filling the start and end
                    time field.</p>
                </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. How can create a group study?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>To create a group study you simply just have to go to the ‘create new’ option of
                    ‘group study’ and fill the necessary fields.</p>
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
      </div>
    </div>
  </section>
  <!-- End Group Study Post Section & Help Desks -->

@endsection