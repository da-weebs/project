<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

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
    @if(Session::has('success'))        
    <span>{{ Session::get('success') }}</span>
    @endif

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">Register User</a></li>
                  <li><a href="{{route('admin.viewuser')}}">View User</a></li>
               </ul>
            </li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('student.add')}}">Add Students</a></li>
                  <li><a href="{{route('student.list')}}">View Students</a></li>
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

    <div class="container">
        <div class="row" style="margin-top:45px">
        
        <h3>List of Students</h3>
        <table class="table table-bordered table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Program Code</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            
            @foreach($students as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->studname}}</td>
                <td>{{$list->course}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->phone}}</td>
                <!-- <td>
                    <a href="/editstudent/{{$list->id}}" >Edit</a> |
                    <a href="/deletestudent/{{$list->id}}" >Delete</a>
                </td> -->
            </tr>
            @endforeach
        </table>
            
        </div>
    </div>
</body>
</html>