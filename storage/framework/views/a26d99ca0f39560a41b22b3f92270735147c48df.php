

    <div class="row mb-3 p-3">

        <div class="col-md-3">
            <label for="">Course</label>
            <select wire:model="byCourse" class="form-control">
                <option value="">No Selected</option>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($course->id); ?>"><?php echo e($course->course_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <tr>
                            <td><?php echo e($student->studname); ?></td>
                            <td><?php echo e($student->matric); ?></td>
                            <td><?php echo e($student->courses->course_name); ?></td>
                            <td><?php echo e($student->cohort); ?></td>
                            <td><?php echo e($student->sessionpsm); ?></td>
                            <td><?php echo e($student->lecturername); ?></td>
                        </tr>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </div>

        


<?php /**PATH /app/resources/views/livewire/students.blade.php ENDPATH**/ ?>