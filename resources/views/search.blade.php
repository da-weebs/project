<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 40px;">
                <h4>Search Everything</h4>
                <form action="{{ route('web.search') }}" method="GET">
                    <div  class="form-group">
                        <label for="">Enter Keyword</label>
                        <input type="text" class="form-control" name="query" placeholder="Search Here ...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <br>
                <br>
                <hr>
                <br>
                @if(isset($name))

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Session</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($name)>0)
                                @foreach($name as $names)
                                    <tr>
                                        <td>{{ $names->studname}}</td>
                                        <td>{{ $names->course}}</td>
                                        <td>{{ $names->email}}</td>
                                    </tr>
                                @endforeach
                            @else

                            <tr><td>No result found !</td></tr>
                            @endif
                        </tbody>
                    </table>

                @endif
            </div>
        </div>
    </div>
    
</body>
</html>