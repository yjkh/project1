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
<img style='height:45%; width: 45%; object-fit: contain' src="images/newlogo1.png" >
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

    
    
<style>

.navbar {
  background:rgba(0,0,0,0.06) !important;
  
}

.navbar:hover {
  background:rgba(0,0,0,0.2) !important;
  transition: .5s;
}




li{
  
padding: 12px;
}


li a:hover {
  background-color: #f2af58;

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
  background-color: #f2af58;
  border-color: #f2af58;
  transition: .7s;
  }

.navbar {

}

</style>


@section('content')
@show


</body>
</html>