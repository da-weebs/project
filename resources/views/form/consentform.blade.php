<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consent Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Supervisor Consent Form</h1>
        <h2>PSM 1</h2>
        <p>Session/Semester 2021/2022 </p>
    </div>

    

    <div class="container mt-5">
        <div class="row justify-content-center">
            
          <div class="col-md-6">
                <form action="{{ route('student.submitconsentform') }}" method="post">
                    @csrf
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                            <span>{{ Session::get('success') }}</span>
                            </div>
                         @endif
                    <h3><b>SECTION A: STUDENT INFORMATION</b></h3>
                    <div class="mb-3">
                        <label class="form-label">Name </label><br>
                        <input type="text" class="form-control" name="name" value="" placeholder="Name">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Year/Course</label><br>
                        <input type="text" class="form-control" name="year" value="" placeholder="Year/Course">
                        <span class="text-danger">@error('year'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">IC. No.</label><br>
                        <input type="text" class="form-control" name="icno" value="" placeholder="IC. No.">
                        <span class="text-danger">@error('icno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Matrix No.</label><br>
                        <input type="text" class="form-control" name="matrixno" value="" placeholder="Matrix No.">
                        <span class="text-danger">@error('matrixno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label><br>
                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label><br>
                        <input type="text" class="form-control" name="mobileno" value="" placeholder="Mobile No.">
                        <span class="text-danger">@error('mobileno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date">
                        <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                    </div>
                        
                        {{-- <h3><b>SECTION B: SUPERVISOR AGREEMENT</b></h3>
                        
                        <div class="mb-3">
                        I <input type="text" class="form-control" name="area" value="" placeholder=""><br>
                        <input type="radio" class="" id="own" name="owner" value="agree">
                        <label class="form-label">Agree</label><br>
                        <input type="radio" class="" id="supervisor" name="owner" value="disagree">
                        <label class="form-label">Disagree</label>
                        to be an Undergraduate Supervisor for this student where he/she will develop a project with the title:
                        ........
                        
                        </div>

                        <div class="mb-3">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date">
                            <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                            </div>

                        </div>

                        <div class="mb-3">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date">
                        <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                        </div> --}}
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
          </div>
     
        </div>
      </div>
</body>
</html>