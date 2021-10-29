<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consent Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Supervisor Consent Form</h1>
        <h2>PSM 1</h2>
        <p>Session/Semester 2021/2022 </p>
    </div>

    

    <div class="container mt-5">
        <div class="row justify-content-center">
            
          <div class="col-md-6">
                <form action="<?php echo e(route('student.submitconsentform')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success">
                            <span><?php echo e(Session::get('success')); ?></span>
                            </div>
                         <?php endif; ?>
                    <h3><b>SECTION A: STUDENT INFORMATION</b></h3>
                    <div class="mb-3">
                        <label class="form-label">Name </label><br>
                        <input type="text" class="form-control" name="name" value="" placeholder="Name">
                        <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Year/Course</label><br>
                        <input type="text" class="form-control" name="year" value="" placeholder="Year/Course">
                        <span class="text-danger"><?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">IC. No.</label><br>
                        <input type="text" class="form-control" name="icno" value="" placeholder="IC. No.">
                        <span class="text-danger"><?php $__errorArgs = ['icno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Matrix No.</label><br>
                        <input type="text" class="form-control" name="matrixno" value="" placeholder="Matrix No.">
                        <span class="text-danger"><?php $__errorArgs = ['matrixno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label><br>
                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                        <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label><br>
                        <input type="text" class="form-control" name="mobileno" value="" placeholder="Mobile No.">
                        <span class="text-danger"><?php $__errorArgs = ['mobileno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>

                    <div class="mb-3">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date">
                        <span class="text-danger"><?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    </div>
                        
                        
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
          </div>
     
        </div>
      </div>
</body>
</html><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/form/consentform.blade.php ENDPATH**/ ?>