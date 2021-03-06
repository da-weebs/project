

    <div class="row mb-3 p-3">

        <div class="col-md-3">
            <label for="">Course</label>
            <select wire:model="byCourse" class="form-control">
                <option value="">No Selected</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id}}">{{$course->course_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label for="">Search</label>
            <input type="text" class="form-control" wire:model.debounce.350ms="searchTerm">
            <!-- <input type="text" wire:model="searchTerm" /> -->
        </div>

        <div class="col-md-2">
            <label for="">Per Page</label>
            <select class="form-control" wire:model="perPage">
                <option value="5">5</option>
                <option value="15">15</option>
                <option value="25">25</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="">Order By</label>
            <select class="form-control" wire:model="orderBy">
                <option value="studname">Name</option>
                <option value="cohort">Cohort</option>
                <option value="sessionpsm">PSM Session</option>
                <option value="lecturername">Supervisor</option>
                <option value="courses_id">Course</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="">Sort By</label>
            <select class="form-control" wire:model="sortBy">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>
        </div>

    

        <div class="container">

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
                    @foreach($students as $student)
                    <div>
                        <tr>
                            <td>{{ $student->studname }}</td>
                            <td>{{ $student->matric }}</td>
                            <td>{{ $student->courses->course_name }}</td>
                            <td>{{ $student->cohort }}</td>
                            <td>{{ $student->sessionpsm }}</td>
                            <td>{{ $student->lecturername }}</td>
                        </tr>
                    </div>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

        


