<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="user_id" content="<?php echo e(Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')); ?>" />
    <meta name="user_name" content="<?php echo e(Session::get('name')); ?>" />
    <title>NewSite</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="<?php echo e(asset('css/vue_menu.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/articles.css')); ?>" rel="stylesheet" />



</head>

<body>

<div id="app" class="container">

    <siteheader></siteheader>

    <sitebody></sitebody>

    <sitefooter></sitefooter>
    <br>
    <br>
</div>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/broadcasts.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\anask\OneDrive\Desktop\meines\Laravel\M5\resources\views/pages/newsite.blade.php ENDPATH**/ ?>