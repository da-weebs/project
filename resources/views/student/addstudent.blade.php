<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    <style>
        .input-card{
            display:flex;
            margin-top: 50px;
            justify-content: center;
        }

    </style>
</head>

<body>
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif

    <div class="input-card">
    <form action="{{ route('student.save') }}" method="post" >
        @csrf
            <label class="input-text" for=" Name">Student Name</label><br>
            <input type="text" name="name" value=""><br>
        
            <label class="input-text" for="Course">Program Code</label><br>
            <select id="course" name="course">
                <option value="SECJ">SECJ</option>
                <option value="SECR">SECR</option>
                <option value="SECH">SECH</option>
                <option value="SECB">SECB</option>
            </select><br>

        <label class="input-text" for="Email">Email</label>
        <br><input type="text" name="email" value=""><br>

        <label class="input-text" for="Email">Phone</label>
        <br><input type="text" name="phone" value=""><br>

        <input type="submit" value="Submit">
    </form>
    </div>
</body>

</html>