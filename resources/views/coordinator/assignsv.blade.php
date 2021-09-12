<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign SV</title>
</head>
    <body>
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif
        @csrf
        <form action="{{route('coordinator.updatesv')}}" method="get">

        <!-- <label for=" Name">Student Name</label><br>
            <input type="text" name="student" value=""><br>
        
            <label for=" Name">Lecturer Name</label><br>
            <input type="text" name="lecturer" value=""><br> -->

                <label for="lecturer">Lecturer</label><br> 
                 <select id="lect-list" name="lecturer">
                @foreach($lecturers as $lect)
                    <option value="{{$lect->name}}" name="lecturer">{{$lect->name}}</option>
                @endforeach
                </select><br>

                
                <label for="student">Student</label><br>
                <select id="student-list" name="students">
                @foreach($students as $stud)
                    <option value="{{$stud->studname}}" name="students">{{$stud->studname}}</option>
                @endforeach
                </select><br>
                
            <input type="submit" value="Submit">
        </form>

    </body>
</html>