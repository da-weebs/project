<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign SV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
    <body>
    

    

        <div class="container" style="margin-top: 60px">
            <div class="col-md-4 col-md-offset-4">
            <?php if(Session::has('success')): ?>
            <span><?php echo e(Session::get('success')); ?></span>
            <?php endif; ?>
            <?php echo csrf_field(); ?>
            <h3>Assign Supervisor</h3>
            <form action="<?php echo e(route('coordinator.updatesv')); ?>" method="get">
                    <div class="form-group">
                        <label for="lecturer">Lecturer</label><br> 
                            <select class='form-control' id="lect-list" name="lecturer">
                                <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lect->name); ?>" name="lecturer"><?php echo e($lect->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                    </div>
                    
                    <div class="form-group">
                    <label for="student">Student</label><br>
                    <select class='form-control' id="student-list" name="students">
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($stud->studname); ?>" name="students"><?php echo e($stud->studname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select><br>
                    </div>
                    
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\Users\FAIZ\Documents\GitHub\project\resources\views/coordinator/assignsv.blade.php ENDPATH**/ ?>