<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="{{ asset('boostrap-4/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1 style="text-align:center">FYP Grading System</h1>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Login </h4><hr>
           <form action="{{ route('auth.check') }}" method="post">
           @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif


           @csrf
              <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{ old('username') }}">
                 <span class="text-danger">@error('username'){{ $message }} @enderror</span>

              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>
             
           </form>
      </div>
   </div>
</div>
    
</body>
</html>