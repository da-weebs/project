<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('admin.dashboard')}}" role="button" data-bs-toggle="dropdown">User</a>
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
                  
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('student.add')}}">Change Password</a></li>
                  
                </ul>
              </li>

              <li class="nav-item"><a class="nav-link" href="{{ route('auth.logout') }}">Logout</a></li>
              {{-- <li class="nav-item"><a class="nav-link disabled" href="#">{{ $LoggedUserInfo['name'] }}</li> --}}
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <div class="row" style="margin-top:80px">
        
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
                <td>
                    <a href="/editstudent/{{$list->id}}" >Edit</a> |
                    <a href="/deletestudent/{{$list->id}}" >Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
            
        </div>
    </div>
</body>
</html>