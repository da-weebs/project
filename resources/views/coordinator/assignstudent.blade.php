<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign</title>
</head>
<body>

    <h1>Student List</h1>
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
            <td>
                <a href="/editstudent/{{$list->id}}" >Edit</a> |
                <a href="/deletestudent/{{$list->id}}" >Delete</a>
            </td>
        </tr>
        @endforeach

    </table>

    

    
</body>
</html>