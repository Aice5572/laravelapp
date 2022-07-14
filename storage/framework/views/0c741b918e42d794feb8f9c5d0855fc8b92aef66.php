

<?php $__env->startSection('title','Index'); ?>

<?php $__env->startSection('menubar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
    インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>ここが本文のコンテンツです。</p>
    <table>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><th><?php echo e($item['name']); ?></th><td><?php echo e($item['mail']); ?></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fightapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hide-\Desktop\laravelapp-1\resources\views/fight/index.blade.php ENDPATH**/ ?>