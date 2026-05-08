

<h1>Crear cuenta</h1>

<form action="/registro" method="POST">
    <?php echo csrf_field(); ?>

    <p>
        Nombre:
        <input type="text" name="name" value="<?php echo e(old('name')); ?>" required>
    </p>
    <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

    <input type="submit" value="Registrarse">
</form>

<br>
<a href="/login"><button>¿Ya tienes cuenta? Inicia sesión</button></a><?php /**PATH /var/www/html/resources/views/registro.blade.php ENDPATH**/ ?>