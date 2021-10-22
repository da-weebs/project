<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </head>
<body>
         <div style="margin-top:85px">
            <h1 style="text-align:center">FYP Grading</h1>
            <h3 style="text-align:center"> Admin</h3>
         </div>

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
                  <li class="nav-item"><a class="nav-link disabled" href="#"><?php echo e($LoggedUserInfo['name']); ?></li>
                </ul>
              </div>
            </div>
          </nav>
                  <!--
                   <ul>
                       <li><a href="/admin/dashboard">Home</a></li>
                       <li><a href="<?php echo e(route('auth.register')); ?>">Register User</a></li>
                       <li><a href="/addstudent">Add Students</a></li>
                       <li><a href="/liststudent">Students List</a></li>
                       <li><a href="<?php echo e(route('coordinator.lecturer')); ?>">Lecturer</a></li>
                       <li><a href="/admin/changepassword">Change Password</a></li> -->
                       <!--  <li style="float:right"><a href="#about"><?php echo e($LoggedUserInfo['name']); ?></a></li> -->
                   <!-- </ul> 
                        <table class="table table-hover">
                      <tbody>
                         <tr>
                            <td><?php echo e($LoggedUserInfo['name']); ?></td>
                            <td><?php echo e($LoggedUserInfo['email']); ?></td>
                            <td><?php echo e($LoggedUserInfo['level']); ?></td>
                            
                         </tr>
                      </tbody> -->
                   <!-- </table> -->
</body>
</html>
<?php /**PATH /app/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>