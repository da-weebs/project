<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php if(Session::has('success')): ?>
    <span><?php echo e(Session::get('success')); ?></span>
    <?php endif; ?>

    
    <form action="<?php echo e(route('update.student')); ?>" method="get" >
        <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($students->id); ?>">

            <label for=" Name">Student Name</label><br>
            <input type="text" name="name" value="<?php echo e($students->studname); ?>"><br>
        
            <label for="Course">Program Code</label><br>
            <select id="course" name="course" selected="<?php echo e($students->course); ?>">
                <option value="SECJ">SECJ</option>
                <option value="SECR">SECR</option>
                <option value="SECH">SECH</option>
                <option value="SECB">SECB</option>
            </select><br>

        <label for="Email">Email</label>
        <br><input type="text" name="email" value="<?php echo e($students->email); ?>"><br>

        <label for="Email">Phone</label>
        <br><input type="text" name="phone" value="<?php echo e($students->phone); ?>"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html><?php /**PATH C:\Users\FAIZ\Documents\GitHub\project\resources\views/student/editstudent.blade.php ENDPATH**/ ?>