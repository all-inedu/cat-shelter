    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link rel="stylesheet" href=<?php echo e(asset('css/bootstrap.min.css')); ?>>
        <link rel="stylesheet" href=<?php echo e(asset('css/splide.min.css')); ?>>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/splide.min.js')); ?>"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/vue@3"></script>

        <style>
            @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');


            body {
                font-family: 'Poppins', sans-serif !important;
                color: rgb(43, 43, 43);
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            span {
                color: rgb(104, 104, 104);
            }
        </style>
    </head>

    <body>
        <?php echo $__env->yieldContent('template'); ?>
    </body>

    </html>
<?php /**PATH C:\Users\dl6\Documents\Project\cat-shelter\resources\views/template/app.blade.php ENDPATH**/ ?>