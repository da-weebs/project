<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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
                  <li><a href="#">Change Password</a></li>
               </ul>
            </li>
            
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
         </ul>
      </div>
    </nav>

    <div class="container">          
  <table class="table table-bordered">
    
    <tbody>
      <tr>
        <th>Session</th>
        <td>2021/2022</td>
      </tr>
      <tr>
        <th>Semester</th>
        <td>1</td>
      </tr>
      <tr>
        <th>Progress 1</th>
        <td>20/12/2021</td>
      </tr>
      <tr>
        <th>Progress 2</th>
        <td>18/6/2022</td>
      </tr>
      <tr>
        <th>Final Report</th>
        <td>22/9/2022</td>
      </tr>
      <tr>
        <th>Presentation & Demo</th>
        <td>25/9/2022</td>
      </tr>



    </tbody>
  </table>
</div>
</body>
</html>