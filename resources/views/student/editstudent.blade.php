<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>
</head>

<body>
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif

    
    <form action="{{ route('update.student') }}" method="get" >
        @csrf
            <input type="hidden" name="id" value="{{$students->id}}">

            <label for=" Name">Student Name</label><br>
            <input type="text" name="name" value="{{$students->studname}}"><br>
        
            <label for="Course">Program Code</label><br>
            <select id="course" name="course" selected="{{$students->course}}">
                <option value="SECJ">SECJ</option>
                <option value="SECR">SECR</option>
                <option value="SECH">SECH</option>
                <option value="SECB">SECB</option>
            </select><br>

        <label for="Email">Email</label>
        <br><input type="text" name="email" value="{{$students->email}}"><br>

        <label for="Email">Phone</label>
        <br><input type="text" name="phone" value="{{$students->phone}}"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>