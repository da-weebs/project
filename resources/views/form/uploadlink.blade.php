<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Student Link</title>

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
                <h2>Proposal Link Update</h2>
        <table class="table table-bordered table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Program Code</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Link</th>
                <th>Action</th>
                
            </tr>
            
            @foreach($student as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->studname}}</td>
                <td>{{$list->course}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->phone}}</td>                    
                
                
                <td>
                    @if($list->projects!=null)     
                        @foreach($list->projects as $senarai) 
                            <a href="{{$senarai->link}}">{{$senarai->link}}<br></a>
                        @endforeach
                    
                    @endif

                    
                </td>
                    
            
                <td>
                    <a href="/form/upload/{{$list->id}}" >Add Link</a> 
                    
                    {{-- <a href="/deletestudent/{{$list->id}}" >Delete</a> --}}
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
</body>
</html>