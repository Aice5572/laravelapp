

<?php $__env->startSection('title','Index'); ?>

<?php $__env->startSection('menubar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
    インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>ここが本文のコンテンツです。</p>
    <p>Controller value<br>'message' = <?php echo e($message); ?></p>
    <p>ViewComposer value<br>'view_message' =<?php echo e($view_message); ?>

        </p>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.fightapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hide-\Desktop\laravelapp-1\resources\views/fight/index.blade.php ENDPATH**/ ?>