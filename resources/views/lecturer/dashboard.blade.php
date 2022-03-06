<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('admin.dashboard')}}">Lecturer</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('student.list')}}">View Students</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Form</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('student.viewform')}}">Project Proposal Form</a></li>
                  <li><a class="dropdown-item" href="{{route('student.viewconsentform')}}">Supervisor Consent Form</a></li>
                  <li><a class="dropdown-item" href="{{route('student.listform')}}">View Proposal List</a></li>
                  <li><a class="dropdown-item" href="{{route('viewimport.proposal')}}">Upload Proposal List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Project</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('view.upload')}}">Project Info</a></li>
                  <li><a class="dropdown-item" href="{{route('view.evaluate')}}">Gdrive Link</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Supervisor</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('view.upload')}}">Assign Panel</a></li>
                  <li><a class="dropdown-item" href="{{route('view.upload')}}">Grade PSM 1</a></li>
                  <li><a class="dropdown-item" href="{{route('view.evaluate')}}">Grade PSM 2</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Panel</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('view.upload')}}">Grade Proposal</a></li>
                  <li><a class="dropdown-item" href="{{route('view.upload')}}">Grade PSM 1</a></li>
                  <li><a class="dropdown-item" href="{{route('view.evaluate')}}">Grade PSM 2</a></li>
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
    {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">

         <ul class="navbar-brand">
            <li class="active"><a href="#">Home</a></li>
            <!-- <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturer
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">View Lecturer</a></li>
                  <li><a href="{{route('coordinator.assignsv')}}">Assign Student</a></li>
               </ul>
            </li> -->

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('admin.changepassword')}}">Change Password</a></li>
               </ul>
            </li>
            
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
         </ul>
      </div>
    </nav> --}}

        <br>
            <div class="container" style="margin-top: 40px">          
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