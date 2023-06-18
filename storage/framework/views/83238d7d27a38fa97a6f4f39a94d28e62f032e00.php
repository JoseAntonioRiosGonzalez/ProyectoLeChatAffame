

<?php $__env->startSection('title', 'Le Chat Affamé - Inicio'); ?>

<?php $__env->startSection('menu-activo-inicio', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="text-center">
            <img src="<?php echo e(asset('images/portada.jpg')); ?>" alt="Portada" class="img-fluid">
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chat2\resources\views/inicio.blade.php ENDPATH**/ ?>