<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="user_id" content="<?php echo e(Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')); ?>" />
    <meta name="user_name" content="<?php echo e(Session::get('name')); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('head'); ?>

    <link href="<?php echo e(asset('css/app.css')); ?>"  rel="stylesheet" />
</head>

<body>
<div id="app" class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->yieldContent('script'); ?>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/broadcasts.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\anask\OneDrive\Desktop\meines\Laravel\M5\resources\views/layouts/newmain.blade.php ENDPATH**/ ?>