<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <style>
        table{
            border-collapse: collapse;
            width: auto;
        }

        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    @if(Session::has('success'))        
    <span>{{ Session::get('success') }}</span>
    @endif
    <a href="{{route('student.add')}}">Add Student</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Program Code</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        
        @foreach($students as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->studname}}</td>
            <td>{{$list->course}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->phone}}</td>
            <td>
                <a href="/editstudent/{{$list->id}}" >Edit</a> |
                <a href="/deletestudent/{{$list->id}}" >Delete</a>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>