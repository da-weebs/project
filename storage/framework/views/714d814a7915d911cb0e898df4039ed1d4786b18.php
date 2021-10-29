<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel</title>
</head>
<body>
    <form action="<?php echo e(url('/import')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> 

        Select excel file to upload
        <br><br>

        <input type="file" name="file" id="file">
        <br><br>

        <button type="submit">Upload File</button>

        <br><br><br>

        <a href="<?php echo e(url('/sample/Book1.xlsx')); ?>">Download Sample</a>
    </form>
</body>
</html><?php /**PATH C:\Users\MFaiz\Documents\GitHub\project\resources\views/test/excel.blade.php ENDPATH**/ ?>