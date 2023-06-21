<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Insertar Promoción</title>
    <style>
    .btn-insertar {
        background-color: #898e75;
        border-color: #898e75;
        color: #ffffff;    
    }
    a{
        background-color: #8b0000 !important; 
    }
    </style>
</head>
<body style="background: #6c5f51";>
    <div class="container bg-black mt-5" style="border: 14px solid black;">

        <div class="d-flex flex-column">

            <div>
                <div class="mt-5">
                    <p class="text-white">Nuevo Código</p>
                </div>

                <form action="<?php echo e(route('insertarPromo')); ?>" method="post">
                <?php echo csrf_field(); ?>
                
                    <div>
                        <input type="text" name="promocion">
                        <button type="submit" class="btn-insertar">INSERTAR</button>
                    </div>

                </form>
            </div>
            
            <div class="d-flex flex-column justify-content-center align-items-center mt-5 bg-secondary">
                <?php $__currentLoopData = $codigosPromo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $codigo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <p class="text-white" style="width:6rem"><?php echo e($codigo->promocion); ?></p>
                        <a class="text-white btn" href="<?php echo e(route('borrarPromo', $codigo->idPro)); ?>">BORRAR</a>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Restaurante\resources\views/insertarPromo.blade.php ENDPATH**/ ?>