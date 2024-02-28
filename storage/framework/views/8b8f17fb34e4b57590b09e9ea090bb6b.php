<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <?php echo $__env->make('libraries.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <!--Link css files-->
</head>
<body>
    

    <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>     <!--Include navigation bar-->



    <?php echo $__env->yieldContent('pageContent'); ?>


    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   <!--Include footer bar-->

    <?php echo $__env->make('libraries.scrpit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!--Link java scrpit files-->
</body>
</html><?php /**PATH G:\Laravel\CRUD-Operation\resources\views/layouts/main.blade.php ENDPATH**/ ?>