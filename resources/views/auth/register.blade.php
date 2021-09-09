<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('boostrap-4/bootstrap.min.css') }}">

</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Register User</h4><hr>
           <form action="{{ route('auth.save') }}" method="post">

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
           <div class="">
                 <label>User Type</label><br>
                 <input type="radio" class="" name="usertype" value="Admin">
                 <label for="Admin">Admin</label><br>

                 <input type="radio" class="" name="usertype" value="Coordinator">
                 <label for="Coordinator">Coordinator</label><br>
                
                 <input type="radio" class="" name="usertype" value="Lecturer">
                 <label for="Lecturer">Lecturer</label><br>
                 <span class="text-danger">@error('usertype'){{ $message }} @enderror</span>

                 
            </div>

           <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter Username" value="{{ old('username') }}">
                 <span class="text-danger">@error('username'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <!-- <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div> -->
              <button type="submit" class="btn btn-block btn-primary">Submit</button>
              <br>
             
           </form>
      </div>
   </div>
</div>
    
</body>
</html>