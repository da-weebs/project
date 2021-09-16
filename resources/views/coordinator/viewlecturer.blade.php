<?php 
 $num=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        table{
            border-collapse: collapse;
            width: auto;
        }

        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    
    
<nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('coordinator.dashboard')}}">Home</a></li>
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

            
         </ul>
      </div>
    </nav>

    <table>
        <tr>
            <th>Num</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Students</th>
        </tr>
        
        
        @foreach($users as $list)
        <tr>
            <td>{{$num++}}</td>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->students}}</td> 
        </tr>
        @endforeach

    </table>

</body>
</html>