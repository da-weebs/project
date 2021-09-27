<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="{{url('css/app.css')}}"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
         <h1 style="text-align:center">FYP Grading</h1>
         <h3 style="text-align:center"> Admin</h3>

      <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">Register Admin</a></li>
                  <li><a href="{{route('auth.register1')}}">Register Coordinator</a></li>
                  <li><a href="{{route('auth.register2')}}">Register Supervisor</a></li>
                  <li><a href="{{route('admin.viewuser')}}">View User</a></li>
               </ul>
            </li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('student.add')}}">Add Students</a></li>
                  <li><a href="{{route('student.list')}}">View Students</a></li>
                  <li><a href="{{route('student.importform')}}">Upload Students Data</a></li>
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