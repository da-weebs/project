<?php 
 $num=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
    
    
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">Coordinator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
       <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Lecturer</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('coordinator.viewlecturer')); ?>">View Lecturer</a></li>
              <li><a class="dropdown-item" href="<?php echo e(route('coordinator.assignsv')); ?>">Assign Student</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('admin.changepassword')); ?>">Change Password</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('auth.logout')); ?>">Logout</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="container" style="margin-top: 20px">
        <h3>List of Lecturer</h3>
            <table class="table table-bordered table-sm">
                <tr>
                    <th>List</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Students</th>
                </tr>
                
                
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($num++); ?></td>
                    <td><?php echo e($list->id); ?></td>
                    <td><?php echo e($list->name); ?></td>
                    <td><?php echo e($list->email); ?></td>
                    <td><?php echo e($list->students); ?></td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        
    </div>
</body>
</html><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/coordinator/viewlecturer.blade.php ENDPATH**/ ?>