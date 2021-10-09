

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
            <input type="text" class="form-control" wire:model.debounce.350ms="search">
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
                <option value="cohort">Cohort</option>
                <option value="sessionpsm">PSM Session</option>
                <option value="lecturername">Supervisor</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="">Sort By</label>
            <select class="form-control" wire:model="sortBy">
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>
            </select>
        </div>

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
                @forelse ($students as $student)
                    {{-- <tr class="{{ $this->isChecked($student->id) }}">
                    <td><input type="checkbox" value="{{ $student->id }}" wire:model="checkedStudent"></td> --}}
                    <td>{{ $student->studname }}</td>
                    <td>{{ $student->matric }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->cohort }}</td>
                    <td>{{ $student->sessionpsm }}</td>
                    <td>{{ $student->lecturername }}</td>
                </tr>
                @empty
                    <code>No student found!</code>
                @endforelse
    
            </tbody>
        </table>
    </div>



