@extends('welcome')

@section('content')

<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img class="profile-img" src="upload_images/{{ Session::get('image') }}" name="" alt="avatar">
          
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label">Full Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="Fullname" placeholder="Enter Full Name"><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="Pnum" placeholder="Enter Phone Number"><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Old Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="Password" placeholder="Enter Old Password"><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">New Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="Npassword" placeholder="Enter New Password"><br>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
              </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

@endsection