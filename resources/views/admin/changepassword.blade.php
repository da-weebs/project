<!DOCTYPE html>
<head>
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
          

            
<body>
    @if(Session::get('UserLevel')==1)
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
      @endif 



        @if(Session::get('UserLevel')==2)
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">

         <ul class="nav navbar-nav">
         <li class="active"><a href="{{route('coordinator.dashboard')}}">Home</a></li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturer
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">View Lecturer</a></li>
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
            <li><a href="#about" >{{ Session::get('LoggedUserName') }}</li>
         </ul>
        </div>
        </nav>
        @endif  

        @if(Session::get('UserLevel')==3)
        <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturer
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">View Lecturer</a></li>
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
            <li ><a href="#">{{ Session::get('LoggedUserName') }}</li>
          </ul>
         </div>
      </nav>
      @endif  

    <div class='container' style="margin-top: 80px">
         <div class="col-md-4 col-md-offset-4">
            <h3>Change Password</h3>
            <form action="{{ route('admin.savepassword') }}" method="get">
               @if(Session::get('success'))
                        <div class="alert alert-success">
                           {{ Session::get('success') }}
                        </div>
                     @endif

                     @if(Session::get('fail'))
                           <div class="alert alert-danger">
                                 {{ Session::get('fail') }}
                           </div>
                     @endif

               @csrf 
               <div class="form-group">
               <input type="password" class="" name="currentpassword" placeholder="Enter current password"><br>
               <span class="text-danger">@error('currentpassword'){{ $message }} @enderror</span>
               </div>

               <div class="form-group">
               <input type="password" class="" name="newpassword" placeholder="Enter new password"><br>
               <span class="text-danger">@error('newpassword'){{ $message }} @enderror</span>
               </div>

               <button type="submit" class="">Submit</button>
            </form>
         </div>
    </div>
</body>