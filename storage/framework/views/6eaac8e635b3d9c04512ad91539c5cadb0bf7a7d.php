<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <style>
        table{
            border-collapse: collapse;
            width: auto;
        }

        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Program Code</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        
        <?php $__currentLoopData = $studentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($list->id); ?></td>
            <td><?php echo e($list->studname); ?></td>
            <td><?php echo e($list->course); ?></td>
            <td><?php echo e($list->email); ?></td>
            <td><?php echo e($list->phone); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</body>
</html><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/student/studentlist.blade.php ENDPATH**/ ?>