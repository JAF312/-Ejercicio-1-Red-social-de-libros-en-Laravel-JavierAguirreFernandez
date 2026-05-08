<h1>Iniciar sesión</h1>

<form action="/login" method="POST">
    <?php echo csrf_field(); ?>

    <p>
        Email:
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required>
    </p>
    <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p>
        Contraseña:
        <input type="password" name="password" required>
    </p>
    <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <input type="submit" value="Entrar">
</form>

<br>
<a href="/registro"><button>¿No tienes cuenta? Regístrate</button></a><?php /**PATH /var/www/html/resources/views/login.blade.php ENDPATH**/ ?>