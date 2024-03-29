<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/articles.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/newarticle.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldContent('head'); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>


<div class="container" id="main">

     <div>
        <?php echo $__env->yieldContent('menu'); ?>
     </div>

    <div class="my-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>

<div id="cookie_query">

</div>
<?php echo $__env->yieldContent('scripts'); ?>
<!--<script src="<?php echo e(asset('js/menu.js')); ?>"></script>-->
<script src="<?php echo e(asset('js/neuMenu.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
<?php /**PATH C:\Users\anask\OneDrive\Desktop\meines\Laravel\M5\resources\views/layouts/main.blade.php ENDPATH**/ ?>