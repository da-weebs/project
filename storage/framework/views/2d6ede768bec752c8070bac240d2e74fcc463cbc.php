<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
        <body>

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">Admin</a>
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
                          <li><a class="dropdown-item" href="<?php echo e(route('web.search')); ?>">Search Students</a></li>
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
                         <div class="card">
                             <div class="card-header">
                                <h1>Import Students Data</h1> 
                             </div>
                                <div class="card-body">
                                <?php if(Session::has('success')): ?>
                                <div class="alert alert-success">
                                <span><?php echo e(Session::get('success')); ?></span>
                                </div>
                                <?php endif; ?>
                                <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('import.student')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="file">Choose CSV</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </body>

    </html><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/student/import-form.blade.php ENDPATH**/ ?>