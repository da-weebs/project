<?php 
 $num=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign</title>
    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
</head>
<body>

    <h1>Student List</h1>
    <table>
        <tr>
            <th>Num</th>
            <th>ID</th>
            <th>Name</th>
            <th>Students</th>
        </tr>
        
        <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($num++); ?></td>
            <td><?php echo e($list->id); ?></td>
            <td><?php echo e($list->name); ?></td>
            <td><a href="">View</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>

<!-- <td>
                <a href="/editstudent/<?php echo e($list->id); ?>" >Edit</a> |
                <a href="/deletestudent/<?php echo e($list->id); ?>" >Delete</a>
            </td> --><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/coordinator/assignstudent.blade.php ENDPATH**/ ?>