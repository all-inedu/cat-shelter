    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link rel="stylesheet" href=<?php echo e(asset('css/bootstrap.min.css')); ?>>
        <link rel="stylesheet" href=<?php echo e(asset('css/splide.min.css')); ?>>
        <link rel="stylesheet" href=<?php echo e(asset('css/form.css')); ?>>
        <link rel="stylesheet" href=<?php echo e(asset('css/color.css')); ?>>
        <link rel="stylesheet" href=<?php echo e(asset('css/intlTelInput.css')); ?>>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/splide.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/intlTelInput.js')); ?>"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/vue@3"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/h7t62ozvqkx2ifkeh051fsy3k9irz7axx1g2zitzpbaqfo8m/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script src="https://cdn.tiny.cloud/1/h7t62ozvqkx2ifkeh051fsy3k9irz7axx1g2zitzpbaqfo8m/tinymce/5/jquery.tinymce.min.js"
            referrerpolicy="origin"></script>




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

            .iti__flag {
                background-image: url("img/flags.png");
            }

            @media (-webkit-min-device-pixel-ratio: 2),
            (min-resolution: 192dpi) {
                .iti__flag {
                    background-image: url("img/flags@2x.png");
                }
            }
        </style>
    </head>

    <body>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.session-alert','data' => ['notif' => session('notif')]]); ?>
<?php $component->withName('session-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['notif' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('notif'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <?php echo $__env->yieldContent('template'); ?>

        <script>
            $('textarea').tinymce({
                height: 300,
                menubar: true,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
            });
        </script>
    </body>

    </html>
<?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/template/app.blade.php ENDPATH**/ ?>