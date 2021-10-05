<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .input-card{
            display:flex;
            margin-top: 50px;
            justify-content: center;
        }

    </style>
</head>

<body>
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif

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

    <div class="container" style="margin-top: 80px">
        
        <h3>Add Student</h3>
        <form action="{{ route('student.save') }}" method="post" >
        @csrf
            <div class="form-group">
            <label class="input-text" for=" Name">Student Name</label><br>
            <input type="text" name="name" value=""><br>
            </div>

            <div class="form-group">
            <label class="input-text" for="Course">Program Code</label><br>
            <select id="course" name="course">
                <option value="SECJ">SECJ</option>
                <option value="SECR">SECR</option>
                <option value="SECH">SECH</option>
                <option value="SECB">SECB</option>
            </select><br>
            </div>

        <div class="form-group">
        <label class="input-text" for="Email">Email</label>
        <br><input type="text" name="email" value=""><br>
        </div>

        <div class="form-group">
        <label class="input-text" for="Email">Phone</label>
        <br><input type="text" name="phone" value=""><br>
        </div>

        <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>