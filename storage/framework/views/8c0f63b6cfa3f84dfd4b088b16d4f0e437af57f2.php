

<?php $__env->startSection('title', 'Le Chat Affamé - Reseñas'); ?>

<?php $__env->startSection('menu-activo-resenas', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
        <h1>Reseñas</h1>

        <form action="<?php echo e(url('/resenas')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chat2\resources\views/resenas.blade.php ENDPATH**/ ?>