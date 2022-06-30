<html>
    <head>
        <title>@yeild('title')</title>
        <style>
            body {font-size:16pt; color:#999; margin: 5px; }
            h1 {font-size:50pt; text-align:right; color:#f6f6f6;
                margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
            ul { font-size:12pt; }
            hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
            .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
            .content {margin:10px; }
            .footer { text-align:right; font-size:10pt; margin:10px;
                border-bottom:solid 1px #ccc; color:#ccc; }
        </style>
    </head>
    <body>
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
        <?php $__env->startSection('menubar'); ?>
        <h2 class="menutitle">※メニュー</h2>
        <ul>
            <li><?php echo $__env->yieldSection(); ?></li>
        </ul>
        <hr size="1">
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="footer">
            <?php echo $__env->yieldContent('footer'); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\hide-\Desktop\laravelapp-1\resources\views/layouts/fightapp.blade.php ENDPATH**/ ?>