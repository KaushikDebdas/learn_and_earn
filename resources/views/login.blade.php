@extends('welcome')

@section('title','Log In')

@section('content')

<!-- login -->
<section id="login mt-5">
    <div class="container login mt-5">
      <div class="row mt-5">
        <div class="col">
          <div class="row">
            <h3>Sign In Form for Registered Users</h3>
            <p class="mt-5">If you have an account, sign in with your email
              address.</p>
          </div>
          <div class="row mt-5">
            <form action="userlogin" method="post">
            <div class="row">
             
                {{csrf_field()}}
                <p>Email <span>*</span></p>
                <input class="loginInput" type="email" name="email" placeholder="Type your email" required>
              </div>
              <div class="row mt-3">
                <p>Password <span>*</span></p>
                <input class="loginInput" type="password" name="password" placeholder="Type your password" required>
              </div>
            </div>
            
            @if(isset($msg))
            <div>
              <br>
              <p class="text-danger">{{ $msg }}</p>
            </div>
            @endif
              
            <div class="row mt-5">
              <ul class="list-unstyled">
                <li>
                  <input type="submit" class="loginSignInBtn" value="Sign In">
                </li>
                <li>
                  <a class="loginForgetBtn" href="">Forget Password</a>
                </li>
              </ul>
            </div>
              </form>
              
        </div>
        <div class="col">
          <div class="row">
            <h3>New Users</h3>
            <p class="mt-5">If you are a new user then click the button below called
              ‘Registration Form’ and get registered.</p>
          </div>
          <div class="row mt-5">
            <ul class="list-unstyled">
              <li>
                <a class="loginSignInBtn" href="{{ URL::to('signup') }}">Registration Form</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End login -->

@endsection