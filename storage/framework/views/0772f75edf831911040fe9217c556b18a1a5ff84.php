<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">User</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('auth.register')); ?>">Register Admin</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('auth.register1')); ?>">Register Coordinator</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('auth.register2')); ?>">Register Supervisor</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('admin.viewuser')); ?>">View User</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('student.add')); ?>">Add Students</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('student.list')); ?>">View Students</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('student.importform')); ?>">Upload Students Data</a></li>
                
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
            <div class="col-md-4 col-md-offset-4">
               <h4>Register User</h4><hr>
               <form action="<?php echo e(route('auth.save')); ?>" method="post">

               <?php if(Session::get('success')): ?>
                  <div class="alert alert-success">
                     <?php echo e(Session::get('success')); ?>

                  </div>
               <?php endif; ?>

               <?php if(Session::get('fail')): ?>
                  <div class="alert alert-danger">
                     <?php echo e(Session::get('fail')); ?>

                  </div>
               <?php endif; ?>

               <?php echo csrf_field(); ?> 
               <div class="">
                     <label>User Type</label><br>
                     <input type="radio" class="" name="usertype" value="Admin">
                     <label for="Admin">Admin</label><br>

                     <input type="radio" class="" name="usertype" value="Coordinator">
                     <label for="Coordinator">Coordinator</label><br>
                     
                     <input type="radio" class="" name="usertype" value="Lecturer">
                     <label for="Lecturer">Lecturer</label><br>
                     <span class="text-danger"><?php $__errorArgs = ['usertype'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

                     
                  </div>

               <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" name="name" placeholder="Enter full name" value="<?php echo e(old('name')); ?>">
                     <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>

                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo e(old('username')); ?>">
                     <span class="text-danger"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>

                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo e(old('email')); ?>">
                     <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div>
                  <!-- <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Enter password">
                     <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                  </div> -->
                  <button type="submit" class="btn btn-block btn-primary">Submit</button>
                  <br>
                  
               </form>
            </div>
         </div>
      </div>
    
</body>
</html><?php /**PATH /app/resources/views/auth/register.blade.php ENDPATH**/ ?>