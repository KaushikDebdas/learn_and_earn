@extends('welcome')

@section('title','Sign Up')

@section('content')

<!-- Sign Up -->
<section class="signUp mt-5" id="signUp">
    <div class="container signUp mb-5">
      <div class="row">
        <div class="row mb-5">
          <h3>Registration form</h3>
        </div>
        <form action="usersignup" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col">
                  <p>Full Name <span>*</span></p>
                  <input class="signUpInput" type="text" name="UserName" placeholder="Type your full name" required>
                </div>
                <div class="col">
                  <p>Phone Number <span>*</span></p>
                  <input class="signUpInput" type="text" name="Pnum" placeholder="Type your phone number" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <p>Email <span>*</span></p>
                  <input class="signUpInput" type="email" name="Email" placeholder="Type your email" required>
                </div>
                <div class="col">
                  <p>Password <span>*</span></p>
                  <input class="signUpInput" type="password" name="Password" placeholder="Type your password" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <p>Department</p>
                  <select name="Department" class="signupDropDon" required>
                    <option value="">Select department</option>
                    <option value="cse">CSE</option>
                    <option value="eee">EEE</option>
                    <option value="bba">BBA</option>
                  </select>
                </div>
                <div class="col">
                  <p>Re-enter Password <span>*</span></p>
                  <input class="signUpInput" type="password" name="Rpassword" placeholder="Type your password" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <p>Geder</p>
                  <select name="Gender" class="signupDropDon" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="col">
                  <p>Upload Profile Picture<span>*</span></p>
                  <input class="signUpInput" type="file" name="profile_image" placeholder="Type your password" required>
                  <ul class="list-unstyled">
                    <li>
                      <br>
                      <input type="submit" class="loginSignInBtn" value="Register">
                    </li>
                    <li>
                      <a class="loginForgetBtn" href="{{ URL::to('login') }}">Login</a>
                    </li>
                  </ul>
                </div>
              </div>
        </form>
        
      </div>
    </div>
</section>
  <!-- End Sign Up -->

@endsection();