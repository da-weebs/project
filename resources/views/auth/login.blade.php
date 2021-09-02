<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('boostrap-4/bootstrap.min.css') }}">

</head>
<body>

<h1 style="text-align:center">PSM Scoring Tool</h1>

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
             <!-- <a href="{{ route('auth.register') }}">I don't have an account, create new</a> -->
           </form>
      </div>
   </div>
</div>
    
</body>
</html>