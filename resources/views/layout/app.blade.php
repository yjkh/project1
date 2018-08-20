<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <title>@yield('title')</title>
      
  </head>

  <body>
    
    <!navbar>


    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="d" style="margin-left:15px">
          <img style='height:100%; width: 100%; object-fit: contain' src="images/logooo.png" >
      </div>

      
      <div class="def" id="navbarColor03">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="welcome">Home</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="subjects">Subjects</a>
            </li>

         

          <li class="nav-item">
            <a class="nav-link" href="forstudents">For Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fortutors">For Tutors</a>
          </li>
        </ul>
      </div>
      
      
      <div class="abc" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="signupask">Join Now</a>
            </li>
            <li class="nav-item" id="yy">
              <a class="nav-link" href="login">Login</a>
            </li>
          </ul>
      </div>


    </nav>

          
          


    @section('content')
    @show


    <!-- Footer -->
    <div class="footer">
      <div class="div1">
          <p class="heading3">Contact Us</p>
      </div>
      <div class="div1">
          <p class="heading3"></p>
      </div>
      <div class="div1">
          <p class="heading3"></p>
      </div>

      <div class="div1" id="logopo">
          <div class="d" style='margin-left:15px' 'margin-top:35px'>
              <img style='height:100%; width: 100%; object-fit: contain' src="images/logooo.png" >
          </div>
      </div>
    </div>

    <div class= "float"> </div>

      
    <style>

      .navbar {
        background-image: url('images/Blackboard.jpg') !important;
      }

      li{
        padding: 8px;
      }

      li a{
        color:white !important;
        font-size: 15px;
        font-weight:bold;
      }


      li a:hover {
        background-color: rgb(0,0,0,.6);
        color:white !important;
        transition: .7s;
        -moz-border-radius-topleft: 15px;
        -moz-border-radius-topright: 15px;
        -moz-border-radius-bottomright: 10px;
        -moz-border-radius-bottomleft: 10px;
        -webkit-border-radius: 15px 15px 10px 10px;
        border-radius: 15px 15px 10px 10px;
      }

      .btn:hover 
        {
        color:  white;
        background-color:#C0392B;
        border-color: #C0392B;
        transition: .7s;
        }

      body {
        background-color:#FDFEFE;
          }

      .footer
      {
        height:300px;
        background-image: url('images/Blackboard.jpg') !important;
        color:white !important;
        transition: .7s;
        text-align: center;
        text-decoration-style: solid;
        font-family: "bookman";
        font-size: 20px;
      }

      .container
      {
        margin-top:30px;
      }

      .abc{
        background-color: rgba(0, 0, 0, 0.7) !important;
        -moz-border-radius-topleft: 15px;
          -moz-border-radius-topright: 15px;
          -moz-border-radius-bottomright: 10px;
          -moz-border-radius-bottomleft: 10px;
          -webkit-border-radius: 15px 15px 10px 10px;
          border-radius: 15px 15px 10px 10px;
          margin-left:250px;
      }

      .def{
        margin-left:250px;
      }

      #yy{
        border-left: 3px solid white;
      }

      .div1{
        Margin-top:2%;
        margin-left:2%;
        float:left;
        width:20%;
        height: 250px;
      }

      .float{
        clear: both;
      }

      .heading3
        {
          color: white;
          font-family: 'Courier New', Courier, monospace;
          font-size: 30px;
          font-weight:bold;
          margin-top:5px;
          margin-left: 0px;
        }

  

          

    </style>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          


  </body>
</html>