<!DOCTYPE html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="{{ asset('boostrap-4/bootstrap.min.css') }}">
</head>

<body>

    @csrf 
<h1>Change Password</h1>
    <form action="{{ route('admin.changepassword') }}" method="get">

        <input type="text" class="" name="curpassword" placeholder="Enter current password"><br>
        <input type="text" class="" name="newpassword" placeholder="Enter new password"><br>

        <button type="submit" class="">Submit</button>
    </form>
</body>