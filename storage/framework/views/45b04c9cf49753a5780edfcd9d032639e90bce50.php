

<?php $__env->startSection('title', 'Le Chat Affamé - Reservas'); ?>

<?php $__env->startSection('menu-activo-reservas', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Reservas</h1>

        <form action="<?php echo e(url('/reservas')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="dia">Día:</label>
                <select id="dia" name="dia" class="form-control">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <select id="hora" name="hora" class="form-control">
                    <?php for($i = 17; $i <= 22; $i++): ?>
                        <option value="<?php echo e(sprintf('%02d', $i)); ?>:00"><?php echo e(sprintf('%02d', $i)); ?>:00</option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="form-group">
            <label for="personas" style="color: white;">Introduce el número de comensales:</label>
            <input type="number" id="personas" name="personas" class="form-control" min="1">
            </div>

            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chat2\resources\views/reservas.blade.php ENDPATH**/ ?>