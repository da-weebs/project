<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif

    
    <form action="{{ route('save.upload') }}" method="post" >
        @csrf
            <input type="hidden" name="id" value="{{$students->id}}">

            <label for=" Name">Gdrive Link</label><br>
            <input type="text" name="link" value=""><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>