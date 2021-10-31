<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Proposal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            
          <div class="col-md-6">
                <form action="<?php echo e(route('give.grade')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-success">
                            <span><?php echo e(Session::get('success')); ?></span>
                            </div>
                         <?php endif; ?>
                    <h3><b>Grade Proposal</b></h3>
                    <div class="mb-3">
                          <input type="hidden" name="id" value="<?php echo e($students->id); ?>">

                          <input type="radio" id="full" name="grade" value="Full Approval">
                          <label for="grade">Full Approval</label><br>

                          <input type="radio" id="minor" name="grade" value="Conditional Approval (Minor)">
                          <label for="grade">Conditional Approval (Minor)</label><br>

                          <input type="radio" id="major" name="grade" value="Conditional Approval (Major)">
                          <label for="grade">Conditional Approval (Major)</label><br>

                          <input type="radio" id="fail" name="grade" value="Fail">
                          <label for="grade">Fail</label>

                        <span class="text-danger"><?php $__errorArgs = ['grade'];
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

</html><?php /**PATH C:\Users\FAIZ\Documents\GitHub\project\resources\views/panel/gradepage.blade.php ENDPATH**/ ?>