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
        <h2>Proposal Link Update</h2>

        <table class="table table-bordered table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Program Code</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
            
            @foreach($student as $list)
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