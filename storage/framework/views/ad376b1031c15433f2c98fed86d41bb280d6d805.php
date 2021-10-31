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

    
    <form action="<?php echo e(route('save.upload')); ?>" method="post" >
        <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($students->id); ?>">

            <label for=" Name">Gdrive Link</label><br>
            <input type="text" name="link" value=""><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html><?php /**PATH C:\Users\FAIZ\Documents\GitHub\project\resources\views/form/formuploadlink.blade.php ENDPATH**/ ?>