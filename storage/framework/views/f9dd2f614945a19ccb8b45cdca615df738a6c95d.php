<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
            font-family: 'Nunito', sans-serif;
            height: 100vh;
        }
        </style>
</head>
<body style="background: linear-gradient(#1b1b17, #6c5f51);">
<div style="width: 100%; height: 96vh" class="d-flex flex-row justify-content-center alilgn-items-center">
        <div class="card bg-black" style="width: 50%; height: 95vh; border: 2px solid #000000;">
        <div class="card-header text-center fs-1 fw-bold" style="background-color: #d7bbad;">
                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Imagen" style="width: 80px; height: 80px; margin-right: 30px;">
                LE CHAT AFFAMÉ
            </div>

            <div class="card-body text-white d-flex flex-column justify-content-between alilgn-items-center" style="width: 100%;">
                    <div class="" style="height: 60%; width: 100%">
                        <form method="POST" action="<?php echo e(route('registrar')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="name" style="width:9rem" class="mt-5 mb-1">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mt-5 mb-1" name="nombre" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="email" style="width:9rem" class="mt-2 mb-1"><?php echo e(__('E-Mail Address')); ?></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mt-2 mb-1" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="telefono" style="width:9rem" class="mt-2 mb-1">Nº Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mt-2 mb-1" name="telefono" required>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-around alilgn-items-center">
                                <label for="password" style="width:9rem" class="mt-2 mb-1"><?php echo e(__('Password')); ?></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mt-2 mb-1" name="password" required autocomplete="new-password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-center alilgn-items-center mt-5">
                                <div class="">
                                    <button type="submit" class="btn mx-5" style="background-color: #d7bbad;">
                                        Registro
                                    </button>
                                </div>
                                <div class="">
                                    <a href="/" class="mx-5 btn text-white bg-secondary" style="text-decoration: none;">Iniciar Sesión</a>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="d-flex flex-row justify-content-around alilgn-items-center">
                            <img src="<?php echo e(asset('img/huellaregistro.jpg')); ?>" style="width:70%; height: 40vh; margin-bottom: 20px;">
                        </div>
                    </div>
        </div>

       
    </div>

    <div>
    
    </div>
</body>
</html>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Restaurante\resources\views/registro.blade.php ENDPATH**/ ?>