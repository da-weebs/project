<!DOCTYPE html>
<head>
    <title>Change Password</title>
    <!-- <link rel="stylesheet" href="{{ asset('boostrap-4/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
          

            
<body>
    @if(Session::get('UserLevel')==1)
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">Register User</a></li>
                  <li><a href="#">View User</a></li>
               </ul>
            </li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('student.add')}}">Add Students</a></li>
                  <li><a href="#">View Students</a></li>
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
            <li><a href="#about">{{ Session::get('LoggedUserName') }}</li>
            
         </ul>

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
            <li ><a href="#about">{{ Session::get('LoggedUserName') }}</li>
         </ul>
      </div>
    </nav>
    @endif  

    <h1>Change Password</h1>
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

        <input type="password" class="" name="curpassword" placeholder="Enter current password"><br>
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>

        <input type="password" class="" name="newpassword" placeholder="Enter new password"><br>
        <span class="text-danger">@error('password'){{ $message }} @enderror</span>

        <button type="submit" class="">Submit</button>
    </form>
</body>