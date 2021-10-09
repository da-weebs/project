<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
<body>

    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-12 col-md-offset-8">
                @livewire('students')
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4" style="margin-top: 40px;">
                <h4>Search Everything</h4>
                

                <form action="{{ route('web.search') }}" method="GET">
                    <div  class="mb-3">
                        <label for="">Enter Keyword</label>
                        <input type="text" class="form-control" name="query" placeholder="Search Here ...">
                    </div>
                    <div class="mb-3">
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
                                <th>Matric Number</th>
                                <th>Program</th>
                                <th>Cohort</th>
                                <th>PSM Session</th>
                                <th>Supervisor</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($name)>0)
                                @foreach($name as $names)
                                    <tr>
                                        <td>{{ $names->studname}}</td>
                                        <td>{{ $names->matric}}</td>
                                        <td>{{ $names->course}}</td>
                                        <td>{{ $names->cohort}}</td>
                                        <td>{{ $names->sessionpsm}}</td>
                                        <td>{{ $names->lecturername}}</td>
                                    </tr>
                                @endforeach

                            @elseif(count($course)>0)
                                @foreach($course as $courses)
                                    <tr>
                                        <td>{{ $courses->studname}}</td>
                                        <td>{{ $courses->matric}}</td>
                                        <td>{{ $courses->course}}</td>
                                        <td>{{ $courses->cohort}}</td>
                                        <td>{{ $courses->sessionpsm}}</td>
                                        <td>{{ $courses->lecturername}}</td>
                                    </tr>
                                @endforeach

                            @elseif(count($cohort)>0)
                                @foreach($cohort as $cohorts)
                                    <tr>
                                        <td>{{ $cohorts->studname}}</td>
                                        <td>{{ $cohorts->matric}}</td>
                                        <td>{{ $cohorts->course}}</td>
                                        <td>{{ $cohorts->cohort}}</td>
                                        <td>{{ $cohorts->sessionpsm}}</td>
                                        <td>{{ $cohorts->lecturername}}</td>
                                    </tr>
                                @endforeach
                            
                            @elseif(count($psm)>0)
                                @foreach($psm as $psms)
                                    <tr>
                                        <td>{{ $psms->studname}}</td>
                                        <td>{{ $psms->matric}}</td>
                                        <td>{{ $psms->course}}</td>
                                        <td>{{ $psms->cohort}}</td>
                                        <td>{{ $psms->sessionpsm}}</td>
                                        <td>{{ $psms->lecturername}}</td>
                                    </tr>
                                @endforeach

                            @elseif(count($matric)>0)
                                @foreach($matric as $matrics)
                                    <tr>
                                        <td>{{ $matrics->studname}}</td>
                                        <td>{{ $matrics->matric}}</td>
                                        <td>{{ $matrics->course}}</td>
                                        <td>{{ $matrics->cohort}}</td>
                                        <td>{{ $matrics->sessionpsm}}</td>
                                        <td>{{ $matrics->lecturername}}</td>
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
    </div> --}}
    @livewireScripts
</body>
</html>