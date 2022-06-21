<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>" />

    <title>Berkatsoft in Laravel-Vue</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="app"></div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\berkatsoft-1\resources\views/layouts/app.blade.php ENDPATH**/ ?>