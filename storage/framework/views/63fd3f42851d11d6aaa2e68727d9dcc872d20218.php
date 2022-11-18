<?php $__env->startSection('title'); ?>  Artikelkategorien <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr id="table_head">
            <th class="col"> id </th>
            <th class="col"> ab_name </th>
        </tr>
        </thead>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="buy_object">
                <td> <?php echo e($category->id); ?> </td>
                <td> <?php echo e($category->ab_name); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anask\OneDrive\Desktop\meines\Laravel\M5\resources\views/pages/categories.blade.php ENDPATH**/ ?>