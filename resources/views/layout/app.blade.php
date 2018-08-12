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


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d" style="margin-left:30px">
        <img style='height:100%; width: 100%; object-fit: contain' src="images/websitelogo.png" >
        </div>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
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

    <div>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  </div>

    <div>
    <form class="form-inline my-2">
      <input class="form-control mr-sm-2" type="text" placeholder="Search Tutor">
      <button class="btn" type="submit">Search</button>
    </form>
  </div>

  <div>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  </div>

    <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="signupask">Join Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
      </div>
    </nav>

    
    


@section('content')
@show


<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">iSkool</h6>
        

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  
  <style>

  .navbar {
    background:#7B241C !important;
  }

  li{
    
  padding: 12px;
  }

  li a{
    color:white !important;
    font-size: 16px;
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

      background-color:#FDFEFE  ; 

    }

  footer{
        
        background-color: rgba(0, 0, 0, 0.7) !important;
        color:white !important;
        transition: .7s;
        -moz-border-radius-topleft: 15px;
        -moz-border-radius-topright: 15px;
        -moz-border-radius-bottomright: 10px;
        -moz-border-radius-bottomleft: 10px;
        -webkit-border-radius: 15px 15px 10px 10px;
        border-radius: 15px 15px 10px 10px;
      
          
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
        }

  .container{
        border: 1px solid black;
        margin-top:30px;
          }

       

</style>




</body>
</html>