<?php 
 $num=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>

    <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
                   <h1>FYP Grading</h1>
                   <ul>
                       <li><a href="/admin/dashboard">Dashboard</a></li>
                       <li><a href="/admin/profile">Profile</a></li>
                       <li><a href="{{route('coordinator.lecturer')}}">Lecturer</a></li>
                       <li style="float:right"><a href="{{ route('auth.logout') }}">Logout</a></li>
                   </ul>
                   
            </div>
         </div>
    </div>

    <h2>Lecturer List</h2>
    <table>
        <tr>
            <th>Num</th>
            <th>ID</th>
            <th>Name</th>
            <th>Students</th>
        </tr>
        
        @foreach($lecturers as $list)
        <tr>
            <td>{{$num++}}</td>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td><a href="">View</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<!-- <td>
                <a href="/editstudent/{{$list->id}}" >Edit</a> |
                <a href="/deletestudent/{{$list->id}}" >Delete</a>
            </td> -->