@extends('layout.signuploginlayout')
@section('title','Signup')
@section('content')

 <div class="limiter">
		<div class="container-login100">
        <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                                        Start Learning Today
                    </span>
                </div>

         <form class="login100-form" action="{{ url('/signupst') }}">
         <fieldset>
         <div class="form-group">
            <label for="exampleInputImage">Select Profile Picture</label>
            <input class="form-control" accept="image/*" type='file' name="pic" onchange="readURL(this);" required/>
            <img id="img" src="#" alt="image preview" />
          </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>

          <div class="form-group">
            <label for="exampleInputUname">Username</label>
            <input type="string" name="uname" class="form-control" id="exampleInputUname" placeholder="Username" required>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          </div>

          <div class="form-group">
            <label for="exampleInputFirstname">First Name</label>
            <input type="text" name="fname" class="form-control" id="exampleInputFirstname" placeholder="enter first name" required>
          </div>

          <div class="form-group">
            <label for="exampleInputLastname">Last Name</label>
            <input type="text" name="lname" class="form-control" id="exampleInputLasttname" placeholder="enter last name" required>
          </div>

          <div class="form-group">
            <label for="exampleInputDOB">Date of Birth</label>
            <input type="date" name="dob" class="form-control" id="exampleInputDOB" placeholder="enter your date of birth" required>
          </div>

          <fieldset class="form-group">
          <label for="exampleInputGender">Gender</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="male" checked="">
                Male
              </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="female">
                Female
              </label>
            </div>
          </fieldset>

          <div class="form-group">
            <label for="exampleInputCNIC">CNIC</label>
            <input type="string" name="cnic" class="form-control" id="exampleInputCNIC" placeholder="enter your CNIC" required>
          </div>

          <div class="form-group">
            <label for="exampleInputADD">Address</label>
            <input type="string" name="addr" class="form-control" id="exampleInputADD" placeholder="Address" required>
          </div>

          <div class="form-group">
            <label for="exampleInputPhone">Phone Number</label>
            <input type="number" name="phone" class="form-control" id="exampleInputPhone" placeholder="Phone number" required>
          </div>
            <div class="container-login100-form-btn" >

                    <button class="login100-form-btn  bg-dark">
                        Register
                    </button> 
                </div>
            </form>
      <div>
   </div>
 </div>
<script>
  function readURL(input) 
  {
    if (input.files && input.files[0]) 
    {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#img').attr('src', e.target.result).width(150).height(150);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection