<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </head>
<body>
         <div style="margin-top:85px">
            <h1 style="text-align:center">FYP Grading</h1>
            <h3 style="text-align:center"> Admin</h3>
         </div>

         <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">Admin</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('auth.register')}}">Register Admin</a></li>
                      <li><a class="dropdown-item" href="{{route('auth.register1')}}">Register Coordinator</a></li>
                      <li><a class="dropdown-item" href="{{route('auth.register2')}}">Register Supervisor</a></li>
                      <li><a class="dropdown-item" href="{{route('admin.viewuser')}}">View User</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('student.add')}}">Add Students</a></li>
                      <li><a class="dropdown-item" href="{{route('student.list')}}">View Students</a></li>
                      <li><a class="dropdown-item" href="{{route('student.importform')}}">Upload Students Data</a></li>
                      <li><a class="dropdown-item" href="{{route('web.search')}}">Search Students</a></li>
                    </ul>
                  </li>
    
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('student.add')}}">Change Password</a></li>
                    </ul>
                  </li>
    
                  <li class="nav-item"><a class="nav-link" href="{{ route('auth.logout') }}">Logout</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#">{{ $LoggedUserInfo['name'] }}</li>
                </ul>
              </div>
            </div>
          </nav>
                  <!--
                   <ul>
                       <li><a href="/admin/dashboard">Home</a></li>
                       <li><a href="{{route('auth.register')}}">Register User</a></li>
                       <li><a href="/addstudent">Add Students</a></li>
                       <li><a href="/liststudent">Students List</a></li>
                       <li><a href="{{route('coordinator.lecturer')}}">Lecturer</a></li>
                       <li><a href="/admin/changepassword">Change Password</a></li> -->
                       <!--  <li style="float:right"><a href="#about">{{ $LoggedUserInfo['name'] }}</a></li> -->
                   <!-- </ul> 
                        <table class="table table-hover">
                      <tbody>
                         <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td>{{ $LoggedUserInfo['level'] }}</td>
                            
                         </tr>
                      </tbody> -->
                   <!-- </table> -->
</body>
</html>
