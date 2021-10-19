<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

   <h1 style="text-align:center">FYP Grading System</h1>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{route('admin.dashboard')}}">Coordinator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Lecturer</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('coordinator.viewlecturer')}}">View Lecturer</a></li>
                <li><a class="dropdown-item" href="{{route('coordinator.assignsv')}}">Assign Student</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.changepassword')}}">Change Password</a></li>
              </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="{{ route('auth.logout') }}">Logout</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">{{ $LoggedUserInfo['name'] }}</li>
          </ul>
        </div>
      </div>
    </nav>
{{-- <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturer
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('coordinator.viewlecturer')}}">View Lecturer</a></li>
                  <li><a href="{{route('coordinator.assignsv')}}">Assign Student</a></li>
               </ul>
            </li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{ route('admin.changepassword') }}">Change Password</a></li>
                </ul> 
            </li> 
            
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>

            <li style="float:right"><a href="#">{{ $LoggedUserInfo['name'] }}</li>
         </ul>
      </div>
    </nav> --}}

</body>
</html>