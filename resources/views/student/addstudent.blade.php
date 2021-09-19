<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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