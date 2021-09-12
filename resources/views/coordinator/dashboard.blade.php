<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>
    
    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h4>FYP Grading</h4><hr>
                   <h3>Logged in as Coordinator</h3>
                   <ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="/admin/profile">Profile</a></li>
                       <li><a href="{{route('coordinator.lecturer')}}">Lecturer</a></li>
                       <li><a href="{{route('coordinator.assignsv')}}">Assign SV</a></li>
                       <li style="float:right"><a href="#about">{{ $LoggedUserInfo['name'] }}</li>
                   </ul>
                   <td><a href="{{ route('auth.logout') }}">Logout</a></td>
            </div>
         </div>
    </div>
</body>
</html>