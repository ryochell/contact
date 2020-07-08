<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Scripts（Jquery） -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->
        <title>アプリ名 - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /Users/ryo/Desktop/ContactForm/ContactForm/resources/views/layouts/app.blade.php ENDPATH**/ ?>