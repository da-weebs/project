<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Student Link</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">Lecturer</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo e(route('student.list')); ?>">View Students</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Form</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo e(route('student.viewform')); ?>">Project Proposal Form</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('student.viewconsentform')); ?>">Supervisor Consent Form</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('student.listform')); ?>">View Proposal List</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('viewimport.proposal')); ?>">Upload Proposal List</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo e(route('student.add')); ?>">Change Password</a></li>
                </ul>
              </li>

              <li class="nav-item"><a class="nav-link" href="<?php echo e(route('auth.logout')); ?>">Logout</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
        <div class="container">
            <div class="row" style="margin-top:80px">
                <h2>Proposal Link Update</h2>
        <table class="table table-bordered table-sm">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Program Code</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Link</th>
                <th>Action</th>
                
            </tr>
            
            <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($list->id); ?></td>
                <td><?php echo e($list->studname); ?></td>
                <td><?php echo e($list->course); ?></td>
                <td><?php echo e($list->email); ?></td>
                <td><?php echo e($list->phone); ?></td>                    
                
                
                <td>
                    <?php if($list->projects!=null): ?>     
                        <?php $__currentLoopData = $list->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $senarai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <a href="<?php echo e($senarai->link); ?>"><?php echo e($senarai->link); ?><br></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php endif; ?>

                    
                </td>
                    
            
                <td>
                    <a href="/form/upload/<?php echo e($list->id); ?>" >Add Link</a> 
                    
                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>
</div>
</body>
</html><?php /**PATH C:\Users\FAIZ\Documents\GitHub\project\resources\views/form/uploadlink.blade.php ENDPATH**/ ?>